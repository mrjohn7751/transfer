package com.example.greencard.service;

import com.example.greencard.dto.APIResponse;
import com.example.greencard.dto.LoginDTO;
import com.example.greencard.entity.Admin;
import com.example.greencard.entity.Child;
import com.example.greencard.entity.User;
import com.example.greencard.repository.AdminRepository;
import com.example.greencard.repository.ChildRepository;
import com.example.greencard.repository.UserRepository;
import lombok.RequiredArgsConstructor;
import org.springframework.stereotype.Service;
import org.springframework.ui.Model;
import org.springframework.web.multipart.MultipartFile;

import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Optional;

@Service
@RequiredArgsConstructor
public class UserService {
    private final AdminRepository adminRepository;
    private final UserRepository userRepository;
    private final ChildRepository childRepository;
    public APIResponse loginCheck(LoginDTO loginDTO) {
        Optional<Admin> byUsernameAndPassword = adminRepository.findByUsernameAndPassword(loginDTO.getUsername(), loginDTO.getPassword());
        if (byUsernameAndPassword.isPresent()) {
            Admin admin = byUsernameAndPassword.get();
            return new APIResponse(admin.getToken(), true);
        }
        return new APIResponse("Login yoki parol xato ketti",false);
    }


    public APIResponse userRegister(String firstName, String lastName, int day, int month, int year, String jins, String country, String city, String currentCountry, String currentRegion, String currentCity, String phoneNumber, String address, String yourMartialSts, String yourInfo, MultipartFile file) throws IOException {
        User user = new User();
        user.setFirstName(firstName);
        user.setLastName(lastName);
        user.setYear(year);
        user.setMonth(month);
        user.setDay(day);
        user.setSex(jins);
        user.setCountry(country);
        user.setCity(city);
        user.setCurrentCountry(currentCountry);
        user.setCurrentRegion(currentRegion);
        user.setCurrentCity(currentCity);
        user.setPhoneNumber(phoneNumber);
        user.setAddress(address);
        user.setYourMartialSts(yourMartialSts);
        user.setYourInfo(yourInfo);
        user.setOriginalName(file.getOriginalFilename());
        user.setBulkFile(file.getSize());
        user.setFileByte(file.getBytes());
        user.setContentTypeFile(file.getContentType());
        userRepository.save(user);
        return new APIResponse("Ro'yhatdan o'tdingiz",true);
    }


    public void adminHome(Model model, String token) {
        Admin admin = adminRepository.findByUsername("Admin").get();
        if (admin.getToken().equals(token)) {
            model.addAttribute("users",userRepository.findAll());
        }
    }

    public void delUser(int id, String token) {
        Optional<User> byId = userRepository.findById(id);
        Admin admin = adminRepository.findByUsername("Admin").get();
        if (admin.getToken().equals(token) && byId.isPresent()) {
            User user = byId.get();
            List<Child> allByParentId = childRepository.findAllByParentId(user.getId());
            childRepository.deleteAll(allByParentId);
            userRepository.delete(user);
        }
    }

    public List<User> getChildrenUser(int id, String token) {
        Admin admin = adminRepository.findByUsername("Admin").get();
        if (admin.getToken().equals(token)) {
            Optional<User> byId = userRepository.findById(id);
            if (byId.isPresent()) {
                User user = byId.get();
                List<User> userList = new ArrayList<>();
                for (Child child : childRepository.findAllByParentId(user.getId())) {
                    User user1 = new User();
                    user1.setFirstName(child.getFirstName());
                    user1.setLastName(child.getLastName());
                    user1.setYear(child.getYear());
                    user1.setMonth(child.getMonth());
                    user1.setDay(child.getDay());
                    user1.setSex(child.getSex());
                    user1.setCountry(child.getCountry());
                    user1.setCity(child.getCity());
                    userList.add(user1);
                }
                return userList;
            }
        }
        return null;
    }

    public void UserCheck(int id, String token) {
        Optional<User> byId = userRepository.findById(id);
        Admin admin = adminRepository.findByUsername("Admin").get();
        if (admin.getToken().equals(token) && byId.isPresent()) {
            User user = byId.get();
            System.out.println(user.isChek());
            if(user.isChek()){
                user.setChek(false);
            }
            else {
                user.setChek(true);
            }
            userRepository.save(user);
        }
    }
}

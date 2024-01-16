package com.example.greencard.controller;

import com.example.greencard.dto.APIResponse;
import com.example.greencard.dto.LoginDTO;
import com.example.greencard.entity.Child;
import com.example.greencard.entity.User;
import com.example.greencard.repository.ChildRepository;
import com.example.greencard.repository.UserRepository;
import com.example.greencard.service.UserService;
import jakarta.servlet.http.HttpServletResponse;
import lombok.RequiredArgsConstructor;
import org.springframework.http.HttpEntity;
import org.springframework.http.ResponseEntity;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.util.FileCopyUtils;
import org.springframework.web.bind.annotation.*;
import org.springframework.web.multipart.MultipartFile;

import java.io.IOException;
import java.util.List;
import java.util.Optional;

@RequestMapping("/admin")
@Controller
@RequiredArgsConstructor
public class AdminController {
    private final UserService userService;
    private final UserRepository userRepository;
    private final ChildRepository childRepository;
    @GetMapping("/login")
    public String adminLogin(){
        return "admin-login";
    }
    @PostMapping("/login-check")
    public HttpEntity<?> loginCheck(@RequestBody LoginDTO loginDTO){
        APIResponse apiResponse = userService.loginCheck(loginDTO);
        return ResponseEntity.status(apiResponse.isHolat()?200:208).body(apiResponse.getXabar());
    }
    @GetMapping("/home")
    public String home(Model model, @CookieValue("Auth")String token){
        userService.adminHome(model,token);
        return "index";
    }
    @PostMapping("/sign-up")
    public HttpEntity<?> signUp(@RequestParam("firstName")String firstName, @RequestParam("lastName")String lastName, @RequestParam("day")int day, @RequestParam("month")int month, @RequestParam("year")int year, @RequestParam("jins")String jins, @RequestParam("country")String country, @RequestParam("city")String city, @RequestParam("currentCountry")String currentCountry, @RequestParam("currentRegion")String currentRegion, @RequestParam("currentCity")String currentCity, @RequestParam("phoneNumber")String phoneNumber, @RequestParam("address")String address, @RequestParam("yourMartialSts")String yourMartialSts, @RequestParam("yourInfo")String yourInfo, @RequestParam("rasm")MultipartFile file) throws IOException {
        APIResponse apiResponse = userService.userRegister(firstName,lastName,day,month,year,jins,country,city,currentCountry,currentRegion,currentCity,phoneNumber,address,yourMartialSts,yourInfo,file);
        return ResponseEntity.status(apiResponse.isHolat()?200:208).body(apiResponse.getXabar());
    }
    @GetMapping("/user-delete/{id}")
    public String home(@PathVariable int id, @CookieValue("Auth")String token){
        userService.delUser(id,token);
        return "redirect:/admin/home";
    }
    @GetMapping("/yuklash/{id}")
    public void download(@PathVariable int id, HttpServletResponse servletResponse) throws IOException {
        Optional<User> byId = userRepository.findById(id);
        if (byId.isPresent()){
            User user = byId.get();
            servletResponse.setHeader("Content-Disposition","attachment; filename=\""+user.getOriginalName()+"\"");
            servletResponse.setContentType(user.getContentTypeFile());
            FileCopyUtils.copy(user.getFileByte(),servletResponse.getOutputStream());
        }
    }
    @PostMapping("/add-children/{phone}")
    public HttpEntity<?> addChild(@RequestBody List<Child> child,@PathVariable String phone){
        User user = userRepository.findByPhoneNumber(phone).get();
        for (Child child2 : child) {
            Child asosiy = new Child();
            asosiy.setFirstName(child2.getFirstName());
            asosiy.setLastName(child2.getLastName());
            asosiy.setYear(child2.getYear());
            asosiy.setMonth(child2.getMonth());
            asosiy.setDay(child2.getDay());
            asosiy.setSex(child2.getSex());
            asosiy.setCountry(child2.getCountry());
            asosiy.setCity(child2.getCity());
            asosiy.setParent(user);
            childRepository.save(asosiy);
        }
        return ResponseEntity.status(200).body("OK");
    }
    @GetMapping("/children/{id}")
    public HttpEntity<?> getChildren(@PathVariable int id, @CookieValue("Auth")String token){
        List<User> users = userService.getChildrenUser(id,token);
        return ResponseEntity.ok(users);
    }
}

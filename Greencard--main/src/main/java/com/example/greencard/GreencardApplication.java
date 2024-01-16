package com.example.greencard;

import com.example.greencard.entity.Admin;
import com.example.greencard.repository.AdminRepository;
import com.example.greencard.service.UserService;
import lombok.RequiredArgsConstructor;
import org.springframework.beans.factory.annotation.Value;
import org.springframework.boot.CommandLineRunner;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.context.annotation.Bean;

@SpringBootApplication
@RequiredArgsConstructor
public class GreencardApplication {

	public static void main(String[] args) {
		SpringApplication.run(GreencardApplication.class, args);
	}

	@Value(value = "${spring.sql.init.mode}")
	String initialValue;
	private final AdminRepository adminRepository;
	@Bean
	public CommandLineRunner commandLineRunner(){
		boolean admin1 = adminRepository.findByUsername("Admin").isPresent();
		if (!admin1) {
			Admin admin = new Admin();
			admin.setUsername("Admin");
			admin.setPassword("john@_2207");
			admin.setToken("eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiJ0ZXN0IiwiaWF0IjoxNjk2MjM3ODE2LCJleHAiOjE2OTYyNDUwMTYsInJvbGVzIjoiVVNFUiJ9.NyXDpgPaiaMAnpgtykOd9zvTJi22bg5YSstHhHNu1NNnz88x996QSwUYEiQd9pf1rA6VEJN7pwjcRjC0JmYV_Q");
			adminRepository.save(admin);
		}
		return null;
	}
}

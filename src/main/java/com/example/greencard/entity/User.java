package com.example.greencard.entity;

import jakarta.persistence.*;
import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;

@AllArgsConstructor @NoArgsConstructor @Data
@Entity @Table(name = "_user")
public class User {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private int id;
    private String firstName;
    private String lastName;
    private int year;
    private int month;
    private int day;
    private String sex;
    private String country;
    private String city;
    private String currentCountry;
    private String currentRegion;
    private String currentCity;
    private String phoneNumber;
    private String address;
    private String yourInfo;
    private String yourMartialSts;
    private String originalName;
    private double bulkFile;
    private String contentTypeFile;
    private byte[] fileByte;
}

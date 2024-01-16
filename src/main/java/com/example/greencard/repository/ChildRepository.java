package com.example.greencard.repository;

import com.example.greencard.entity.Child;
import org.springframework.data.jpa.repository.JpaRepository;

import java.util.List;

public interface ChildRepository extends JpaRepository<Child,Integer> {
    List<Child> findAllByParentId(int parent_id);
}

package com.locumme.pojos;

import java.util.List;

import lombok.Data;

@Data
public class Subject {
	String id;
	String title;
	List<Syllabus> syllabus;
}

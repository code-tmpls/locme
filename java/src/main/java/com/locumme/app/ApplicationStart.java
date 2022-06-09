package com.locumme.app;

import java.io.IOException;
import java.util.ArrayList;

import com.locumme.db.queries.ReadPlatformMenus;
import com.locumme.db.queries.ReadPlatformQAs;
import com.locumme.file.process.FileManager;
import com.locumme.pojos.Subject;
import com.locumme.pojos.Syllabus;
import com.locumme.pojos.Technologies;

public class ApplicationStart {
	
 public static final String PROJECT_URL = System.getProperty("user.dir");
 public static final String RESOURCE_FOLDER = PROJECT_URL+"\\src\\main\\resources";
 public static final String GENERATED_FOLDER = PROJECT_URL+"\\generated";
 public static final String TEMPLATE_FOLDER = GENERATED_FOLDER+"\\templates";
 
 public static void main(String args[]) throws IOException, InterruptedException {
	 
	FileManager fileManager = new FileManager();
	
	/* Delete Generate Folder */
	 fileManager.deleteAFolder(GENERATED_FOLDER);
	 
	/* Copy Resources into Generated Folder */
	fileManager.copyFromFolderToFolder(RESOURCE_FOLDER, GENERATED_FOLDER);
	
	/* Generate Template Folders and Files */
	Technologies[] technologies = new ReadPlatformMenus().generateMenus();
	
	for(Technologies technology : technologies) {
	 for(Subject subject : technology.getSubject()) {
	   for(Syllabus syllabus : subject.getSyllabus()) {
		   String subjectId = subject.getId();
		   String syllabusId = syllabus.getId();
		   String url = TEMPLATE_FOLDER +"\\"+subjectId+"\\"+syllabusId+"\\00_basic_01.html";
		   ReadPlatformQAs readPlatformQAs = new ReadPlatformQAs();
		   readPlatformQAs.getPlatformQAs(url, syllabus.getTitle());
	   }
	 }
	}
	
 }
}

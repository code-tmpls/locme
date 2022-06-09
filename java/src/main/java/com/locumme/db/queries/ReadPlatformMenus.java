package com.locumme.db.queries;

import java.util.Arrays;
import java.util.List;

import com.google.gson.Gson;
import com.google.gson.GsonBuilder;
import com.locumme.constants.Properties;
import com.locumme.core.JDBCConnectivity;
import com.locumme.file.process.WriteHTMLFile;
import com.locumme.pojos.Subject;
import com.locumme.pojos.Syllabus;
import com.locumme.pojos.Technologies;

public class ReadPlatformMenus {

	private Technologies[] getTechnologies() {
		Gson gson = new Gson();
		JDBCConnectivity jdbc = new JDBCConnectivity();
		String queryJSON = jdbc.selectQueryToJSON("SELECT techName As title  FROM platform_tech");
		Technologies[] technologies = gson.fromJson(queryJSON, Technologies[].class);
		for(int index=0;index<technologies.length;index++) {
		  String title = technologies[index].getTitle();
		  List<Subject> subject = getSubject(title);
		  technologies[index].setSubject(subject);
		}
		return technologies;
	}
	
	
	private List<Subject> getSubject(String platformName) {
		Gson gson = new Gson();
		JDBCConnectivity jdbc = new JDBCConnectivity();
		String queryJSON = jdbc.selectQueryToJSON("SELECT subjectFolder As id, subject As title  FROM platform_subject WHERE techName='"+platformName+"';");
		Subject[] subject = gson.fromJson(queryJSON, Subject[].class);
		for(int index=0;index<subject.length;index++) {
			 String title = subject[index].getTitle();
			  List<Syllabus> syllabus = getSyllabus(title);
			  subject[index].setSyllabus(syllabus);
		}
		return Arrays.asList(subject);
	}
	
	private List<Syllabus> getSyllabus(String platformName) {
		Gson gson = new Gson();
		JDBCConnectivity jdbc = new JDBCConnectivity();
		String queryJSON = jdbc.selectQueryToJSON("SELECT syllabusFolder As id, syllabus As title  FROM platform_syllabus WHERE subject='"+platformName+"' ORDER BY syllabusFolder ASC;");
		Syllabus[] syllabus = gson.fromJson(queryJSON, Syllabus[].class);
		return Arrays.asList(syllabus);
	}
	
	public Technologies[] generateMenus() {
		WriteHTMLFile writeHTMLFile = new WriteHTMLFile();
		String fileName = Properties.PROJECT_URL + "/generated/static/menu.json";
		Technologies[] technologies = getTechnologies();
		Gson gson = new GsonBuilder().setPrettyPrinting().create();
		writeHTMLFile.writeToFile(fileName, gson.toJson(technologies));
		return technologies;
	}
	
}

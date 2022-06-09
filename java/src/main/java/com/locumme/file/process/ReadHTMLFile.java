package com.locumme.file.process;

import java.io.BufferedReader;
import java.io.FileReader;
import java.io.IOException;
import java.util.Arrays;
import java.util.List;

import org.jsoup.Jsoup;
import org.jsoup.nodes.Document;
import org.jsoup.nodes.Element;
import org.jsoup.select.Elements;

import com.locumme.db.queries.InsertQA;

import org.jsoup.nodes.Entities;
import org.jsoup.nodes.TextNode;

public class ReadHTMLFile {

	public ReadHTMLFile(String fileName) {
		try {
		readHTML(fileName);
		System.out.println("Done...");
		} catch(IOException e) { e.printStackTrace(); }
	}
	
	public  String readFile(String fileName) throws IOException {
		StringBuilder sb = new StringBuilder();
		BufferedReader br = new BufferedReader(new FileReader(fileName));
		for (String st="";(st = br.readLine()) != null;)
			sb.append(st);
		br.close();
		return sb.toString();
	}
	
	public  String workingWithQuestion(Elements questionElements, int index) {
		/* Working with Question */
		String question = questionElements.get(index).text();
		System.out.println(question+" - Executed ");
		String[] questionParser = question.split("\\.");
		String questionParsed[] = Arrays.copyOfRange(questionParser, 1, questionParser.length);
		StringBuilder questionElement = new StringBuilder();
	    for(int i = 0; i < questionParsed.length; i++) {
	      questionElement.append(questionParsed[i]);
	    }
	    return questionElement.toString().replace("'", "\\'").trim();
	}
	
	public  String workingWithAnswer(Elements answerElements, int index) {
		/* Working with Answers */
		StringBuilder answerElement = new StringBuilder();
		answerElement.append(answerElements.get(index).html().replace("<!-- Answer ::: START -->", "")
				.replace("<!-- Answer ::: END -->", ""));
	  return answerElement.toString().replace("'", "\\'").trim();
	}
	
	public void readHTML(String filePath) throws IOException {
		Document doc = Jsoup.parse(readFile(filePath)); 
		
		Document.OutputSettings settings = doc.outputSettings();
			// settings.prettyPrint(false);
			settings.escapeMode(Entities.EscapeMode.extended);
			settings.charset("ASCII");
		
		Elements questionElements = doc.select("div[class='appQuestion']>b");
		Elements answerElements = doc.select("div[class='list-group-item appAnswer']");
		
		// System.out.println("Questions Size: "+questionElements.size());
		// System.out.println("Answers Size: "+answerElements.size());
		
		if(questionElements.size() == answerElements.size()) {
		 for(int index=0;index<questionElements.size();index++) {
			String question = workingWithQuestion(questionElements, index);
			String answer = workingWithAnswer(answerElements, index);
			Document answerDoc = Jsoup.parse(answer);
			Elements pres = answerDoc.select("pre");
			for (Element pre : pres) {
			      System.out.println(pre.text());
			  }
			System.out.println(question);
			System.out.println(answer);
			
			new InsertQA().insertQuestion(question, answer);	
			break;
		 }
		}
	}
	
	public static void main(String args[]) throws IOException {
		// String PROJECT_URL = System.getProperty("user.dir");
	//	new ReadHTMLFile(PROJECT_URL+"//00_basic_03(react).html");
		
	}
	
}

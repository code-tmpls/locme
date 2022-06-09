package com.locumme.db.queries;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.Statement;

import com.locumme.constants.Properties;

public class InsertQA {
	 
	 private String insertQuery(String question, String answer) {
			String syllabus = "All";
			String qIndex = "0";
			StringBuilder sb = new StringBuilder("INSERT INTO "+Properties.TBL_PLATFORM_QA);
			sb.append("(syllabus, question, questionType, answer, qIndex) ");
			sb.append("VALUES (")
			  .append("'").append(syllabus).append("',")
			  .append("'").append(question).append("',")
			  .append("'").append("THEORY").append("',")
			  .append("'").append(answer).append("',")
			  .append("'").append(qIndex).append("'")
			  .append(");");
			return sb.toString();
	 }
	 
	 public void insertQuestion(String question, String answer) {
		  String sql = insertQuery(question, answer);
		  Connection conn = null;
		  try {
		    conn = DriverManager.getConnection(Properties.DB_URL, Properties.USER, Properties.PASS);
		    Statement stmt = conn.createStatement();	      
		    stmt.executeUpdate(sql);
		    System.out.println(question+" - Executed ");
		  } catch (SQLException e) {
			  System.out.println(sql);
		     e.printStackTrace();
		  } finally {
		      try {
		        conn.close();
		      }
		      catch (SQLException sqlException) {
		        sqlException.printStackTrace();
		      }
		  }
	}
	   
}

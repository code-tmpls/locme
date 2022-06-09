package com.locumme.db.queries;

import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.ResultSetMetaData;
import java.sql.Statement;

import com.locumme.core.JDBCConnectivity;
import com.locumme.file.process.WriteHTMLFile;

public class ReadPlatformQAs {

 public void getPlatformQAs(String fileName, String syllabus) {
	
	String sql = "SELECT * FROM platform_qa_copy WHERE syllabus='"+syllabus+"';";
		Connection conn = null;
		Statement stmt = null;
		// 
		try {
			JDBCConnectivity jdbcConnectivity = new JDBCConnectivity();
			conn = jdbcConnectivity.connectDB();
			stmt = conn.createStatement();
	         ResultSet rs = stmt.executeQuery(sql);
	         System.out.println("[syllabusFolder]: "+fileName +" syllabus: "+syllabus);
	         int index = 0;
	         System.out.println("Query: "+sql);
	         while(rs.next()) {
	           index++;
	           String question = rs.getString("question");
	           String answer = rs.getString("answer");
	           StringBuilder sb = new StringBuilder("<div class=\"appQuestion\">");
	        		 sb.append("<b>").append(index).append(". ").append(question).append("</b>").append("</div>").append("\n");
	        		 sb.append("<div class=\"list-group\">").append("\n");
	        		 sb.append("<div class=\"list-group-item appAnswer\">").append("\n");
	        		 sb.append(answer);
	        		 sb.append("</div>").append("\n");
	        		 sb.append("</div>").append("\n");
	          System.out.println(index+"  syllabusFolder: "+fileName+" syllabus: "+syllabus);
	          WriteHTMLFile writeHTMLFile = new WriteHTMLFile();
	          	writeHTMLFile.appendToFile(fileName, sb.toString());
	         }
		  } catch (Exception e) {
			 e.printStackTrace();
		  } finally {
		      try {
		    	stmt.close();
		        conn.close();
		      }
		      catch (Exception e) {
		        e.printStackTrace();
		      }
		  }
	}
 
}

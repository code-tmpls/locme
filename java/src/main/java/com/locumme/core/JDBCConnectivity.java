package com.locumme.core;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.ResultSetMetaData;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.LinkedHashMap;

import com.google.gson.Gson;
import com.locumme.constants.Properties;
import com.locumme.file.process.WriteHTMLFile;

public class JDBCConnectivity {

	public Connection connectDB() {
	  Connection conn = null;
	  try {
		 conn = DriverManager.getConnection(Properties.DB_URL, Properties.USER, Properties.PASS); 
	  } catch (SQLException e) {
		 e.printStackTrace();
	  } 
	  return conn;
	}
	
	public String selectQueryToJSON(String sql) {
		Gson gson = new Gson();
        ArrayList<LinkedHashMap<String, String>> rows = new ArrayList<LinkedHashMap<String, String>>();
		Connection conn = null;
		Statement stmt = null;
		try {
			conn = connectDB();
			stmt = conn.createStatement();
	         ResultSet rs = stmt.executeQuery(sql);
	         ResultSetMetaData rms = rs.getMetaData();
	         while(rs.next()) {
	        	 LinkedHashMap<String, String> column = new LinkedHashMap<String, String>();
	        	 for(int index=1;index<=rms.getColumnCount();index++) {
	        		 String columnName = rms.getColumnLabel(index);
	        		 String columnValue = rs.getString(columnName);
	        		 column.put(columnName, columnValue);
	        	 }
	        	 rows.add(column);
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
		return gson.toJson(rows);
	}
	
	public void insertQuery(String sql) {
		Connection conn = null;
		Statement stmt = null;
		 try {
			conn = connectDB();
			if(conn!=null) {
		      stmt = conn.createStatement();	      
		      stmt.executeUpdate(sql);
			}
		  } catch (SQLException e) {
		     e.printStackTrace();
		  } finally {
		      try {
		    	stmt.close();
		        conn.close();
		      }
		      catch (SQLException sqlException) {
		        sqlException.printStackTrace();
		      }
		  }
	}
	
	public static void main(String args[]) {
		
	}
	
}

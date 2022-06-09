package com.locumme.file.process;

import java.io.BufferedWriter;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.FileWriter;
import java.io.IOException;
import java.io.OutputStreamWriter;

import com.locumme.constants.Properties;

public class WriteHTMLFile {
  public void appendToFile(String fileName, String content) {
	 BufferedWriter bw = null;
	 try {
		 /* If File not exists, create Files with Folders */
		 FileManager fileManager = new FileManager();
		 fileManager.createFileWithFolders(fileName);
		 
		 /* Appending Content to the Created File */
		 FileWriter fstream = new FileWriter(fileName, true);
		 bw = new BufferedWriter(fstream);
		 bw.write(content);

	 } catch(IOException e) {
		 e.printStackTrace();
	 } finally {
		 try {
			 bw.close();
		 }catch(IOException e) {
			e.getStackTrace(); 
		 }
	 }
  }
  
  public void writeToFile(String fileName, String content) {
	  BufferedWriter bw = null;
	 try {
	 /* If File not exists, create Files with Folders */
	 FileManager fileManager = new FileManager();
	 fileManager.createFileWithFolders(fileName);
	 
	 /* Adding Content to the Created File */
	 FileWriter fstream = new FileWriter(fileName);
	 bw = new BufferedWriter(fstream);
	 bw.write(content);

	 } catch(IOException e) {
		 e.printStackTrace();
	 } finally {
		 try {
			 if(bw!=null) { bw.close(); }
			 }catch(IOException e) {
				e.getStackTrace(); 
			 }
	 }
  }

}

package com.locumme.file.process;

import java.io.File;
import java.io.IOException;

import org.apache.commons.io.FileUtils;

import com.locumme.constants.Properties;
import com.locumme.db.queries.ReadPlatformMenus;

public class FileManager {
 public static final String PROJECT_URL = System.getProperty("user.dir");
 
 public void copyFromFolderToFolder(String fromFolder, String toFolder) throws IOException {
   File fromDir = new File(fromFolder);
   File toDir = new File(toFolder);
   createAFolder(toFolder);
   FileUtils.copyDirectory(fromDir, toDir);
 }
 
 public void deleteAFolder(String fileName) {
	 File file = new File(fileName);
     try {
         FileUtils.deleteDirectory(file);
     } catch (IOException e) {
         e.printStackTrace();
     }	 
 }
 
 public void createAFile(String fileName) {
	 File createFile = new File(fileName);
		if(!createFile.exists()) {
			try {
				createFile.createNewFile();
			} catch (IOException e) {
				e.printStackTrace();
			}
		}
 }
 
 public void createAFolder(String folderName) {
	 File createFolder = new File(folderName);
	 if(!createFolder.exists()) {
		createFolder.mkdir();
	 }
 }
 
 public void createFileWithFolders(String fileName) {
	try {
		File file = new File(fileName);
		if(!file.exists()) {
			String[] fileFolders = fileName.replace(PROJECT_URL, "").split("\\\\");
			StringBuilder fileNameBuilder = new StringBuilder(PROJECT_URL); 
			for(int index=0;index<fileFolders.length;index++) {
				if(index == (fileFolders.length-1)) { /* Last Element - File Creation */
					fileNameBuilder.append(fileFolders[index]);
					createAFile(fileNameBuilder.toString());
				} else { /* Other Elements - Folder Creation */
					fileNameBuilder.append(fileFolders[index]).append("\\");
					createAFolder(fileNameBuilder.toString());
				}
			}
		}
	} catch(Exception e) {
		e.printStackTrace();
	}
 }
 
}

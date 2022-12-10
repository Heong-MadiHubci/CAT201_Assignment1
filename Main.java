import java.io.FileWriter;
import java.io.IOException;
import org.apache.poi.ss.usermodel.Row;
import org.apache.poi.ss.usermodel.Sheet;
import org.apache.poi.ss.usermodel.Workbook;
import org.apache.poi.ss.usermodel.WorkbookFactory;
import org.apache.poi.ss.usermodel.Cell;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileOutputStream;
import org.apache.commons.io.FilenameUtils;

public class Main {
    //Main function to execute the program
        public static void main(String[] args){
            String fileName = args[0];

            String directory = System.getProperty("user.dir");

            directory = directory.replace('\\', '/');

            String fileNameWithoutExt = FilenameUtils.removeExtension(fileName);
            String extension = FilenameUtils.getExtension(fileName);

            String inputPath = "";
            if(extension.equalsIgnoreCase("xlsx"))
                inputPath = directory + "/convertedFile/" + fileNameWithoutExt + ".xlsx";
            else if (extension.equalsIgnoreCase("xls"))
                inputPath = directory + "/convertedFile/" + fileNameWithoutExt + ".xls";

            String outputPath = directory + "/convertedFile/" + fileNameWithoutExt + ".csv";

            File inputFile = new File(inputPath);
            File outputFile = new File(outputPath);

            try {
                FileOutputStream fos = new FileOutputStream(outputFile);
                FileInputStream fis = new FileInputStream(inputFile);

                Workbook workbook = null;
                workbook = WorkbookFactory.create(fis);

                StringBuffer strbuff = null;

                for(int i=0;i<workbook.getNumberOfSheets();i++) {
                    strbuff = getStringBuffer(workbook.getSheetAt(i));
                }

                fos.write(strbuff.toString().getBytes());

                fis.close();
                fos.close();
            } catch (Exception e) {
                System.out.println("Error Detected. pls have a check!");
            }
        }
}

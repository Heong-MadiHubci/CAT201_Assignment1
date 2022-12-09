import org.apache.poi.ss.usermodel.Row;
import org.apache.poi.ss.usermodel.Sheet;
import org.apache.poi.ss.usermodel.Workbook;
import org.apache.poi.ss.usermodel.WorkbookFactory;
import org.apache.poi.ss.usermodel.Cell;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileOutputStream;
import org.apache.commons.io.FilenameUtils;

public class fileConverter {

    public static void main(String[] args){

        //String fileName = args[0].substring(1, args[0].length()-1);
	String fileName = args[0];
        String directory = System.getProperty("user.dir");
        directory = directory.replace('\\', '/');
        String fileNameWithoutExt = FilenameUtils.removeExtension(fileName);
        String extension = FilenameUtils.getExtension(fileName);

        String inputPath = "";
        if(extension.equalsIgnoreCase("xlsx"))
	{
            inputPath = directory + "/convertedFile/" + fileNameWithoutExt + ".xlsx";
	}
        else if (extension.equalsIgnoreCase("xls"))
	{
            inputPath = directory + "/convertedFile/" + fileNameWithoutExt + ".xls";
	}



        String outputPath = directory + "/convertedFile/" + fileNameWithoutExt + ".csv";

        File inputFile = new File(inputPath);
        File outputFile = new File(outputPath);



        try {

            FileOutputStream fos = new FileOutputStream(outputFile);
            FileInputStream fis = new FileInputStream(inputFile);

            Workbook workbook = null;
            String ext = FilenameUtils.getExtension(inputFile.toString());

            workbook = WorkbookFactory.create(fis);

            StringBuffer strbuff = null;


            for(int i=0;i<workbook.getNumberOfSheets();i++) {
                strbuff = echoAsCSV(workbook.getSheetAt(i));
            }

            fos.write(strbuff.toString().getBytes());
            fos.close();


        } catch (Exception g) {
            System.out.println("Something went wrong12!");

        }
    }


public static StringBuffer echoAsCSV(Sheet sheet) {
        StringBuffer data = new StringBuffer();
        Row row = null;
        for (int i = 0; i < sheet.getLastRowNum()+1; i++) {
//                 System.out.println("hahaha" + i);
            row = sheet.getRow(i);
            if(row == null) {
                data.append("\n");
                continue;
            }
            for (int j = 0; j < row.getLastCellNum(); j++) {
                Cell cell = row.getCell(j);
                if(cell == null){
                    data.append(",");
                    continue;
                }
                switch (cell.getCellType())
                {
                    case BOOLEAN:
                        data.append(cell.getBooleanCellValue() + ",");
                        break;
                    case NUMERIC:
                        data.append(cell.getNumericCellValue() + ",");
                        break;
                    case STRING:
                        data.append(cell.getStringCellValue() + ",");
                        break;
                    case FORMULA:
                        data.append("=" +cell.getCellFormula());
                    case BLANK:
                        data.append("" + ",");
                        break;
                    default:
                        data.append(cell + ",");
                }
                //                data.append(row.getCell(j));
            }
            data.append("\n");
        }

        return data;
    }

}









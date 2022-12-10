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
    //function to get stringBuffer value based on the excel file uploaded
    public static StringBuffer bufferValue(Sheet sheet) {
            StringBuffer data = new StringBuffer();

            Row row = null;

            for (int i = 0; i < sheet.getLastRowNum()+1; i++) {
                row = sheet.getRow(i);

                if(row == null) {
                    data.append("\n");
                    continue;
                }

                for (int j = 0; j < row.getLastCellNum();j++) {
                    Cell cell = row.getCell(j);

                    if(cell == null){
                        data.append(",");
                        continue;
                    }

                    switch (cell.getCellType())
                    {
                        case NUMERIC:
                            data.append(cell.getNumericCellValue() + ",");
                            break;
                        case BOOLEAN:
                            data.append(cell.getBooleanCellValue() + ",");
                            break;
                        case STRING:
                            data.append(cell.getStringCellValue() + ",");
                            break;
                        case FORMULA:
                            data.append("=" +cell.getCellFormula());
                            break;
                        case BLANK:
                            data.append("" + ",");
                            break;
                        default:
                            data.append(cell + ",");
                    }
                }
                data.append("\n");
            }
            return data;
        }

}









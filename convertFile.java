import java.io.*;
import java.util.Iterator;

import org.apache.poi.openxml4j.opc.OPCPackage;
import org.apache.poi.ss.usermodel.Cell;
import org.apache.poi.ss.usermodel.Row;
import org.apache.poi.xssf.usermodel.XSSFSheet;
import org.apache.poi.xssf.usermodel.XSSFWorkbook;

public class convertFile {
    private FileOutputStream f;
    private String path;
    private XSSFWorkbook wBook;

    public StringBuffer convertToCSV() throws IOException{
        StringBuffer data = new StringBuffer();

        f = new FileOutputStream(path);

        wBook = new XSSFWorkbook(f.toString());

        XSSFSheet sheet = wBook.getSheetAt(0);

        Row row;
        Cell cell;

        Iterator<Row> rowIterator = sheet.iterator();

        while(rowIterator.hasNext()){
            row = rowIterator.next();

            Iterator<Cell> cellIterator = row.cellIterator();
            while(cellIterator.hasNext()) {
                cell = cellIterator.next();

                switch (cell.getCellType()) {
                    case BOOLEAN:
                        data.append(cell.getBooleanCellValue() + ",");

                        break;
                    case NUMERIC:
                        data.append(cell.getNumericCellValue() + ",");

                        break;
                    case STRING:
                        data.append(cell.getStringCellValue() + ",");
                        break;

                    case BLANK:
                        data.append("" + ",");
                        break;

                    default:
                        data.append(cell + ",");
                }
            }
            data.append('\n');
        }
        return data;
    }
    public void setFilePath(String path) {
        this.path = path;
    } //set the file path

}

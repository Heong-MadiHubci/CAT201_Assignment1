import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.FileWriter;
import java.io.IOException;

public class Main {
    public static void main(String[] args){
        for(int i = 0; i < args.length; i++){
            convertFile fileConvert = new convertFile();

            fileConvert.setFilePath(args[i]);

            try{
                StringBuffer data = new StringBuffer();
                data = fileConvert.convertToCSV();

                FileOutputStream fos = new FileOutputStream("output.csv");
                fos.write(data.toString().getBytes());
                fos.close();
            }
            catch(IOException ex){
                System.err.println(ex.getMessage());
            }
        }
    }
}

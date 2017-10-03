package edu.hunter;

import java.io.File;
import java.io.FileWriter;
import java.io.IOException;

public class FileThing {

    public static void main(String[] args){
        FileThing thing1 = new FileThing("trees1.txt");
        FileThing thing2 = new FileThing("trees2.txt");
        FileThing thing3 = new FileThing("trees3.txt");
        FileThing thing4 = new FileThing("trees4.txt");
    }

    public FileThing(String someFileName) {

        File myFile = new File(someFileName);

        if(!myFile.exists() ){
            System.out.println("That file doesn't exist.");
            //System.exit(1);
        }

        FileWriter writer = null;

        try{
            writer = new FileWriter(myFile, true);
            writer.write("Acacia\n");
            writer.write("Magnolia\n");
            writer.write("Oak\n");
            writer.write("Gingko\n");
        }
        catch(IOException iox){
            System.out.println("Something went wrong." + iox.getMessage());
        }
        finally{
            try{ writer.close(); } catch(IOException iox){ /* do nothing */}
        }

    }


}

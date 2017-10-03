package edu.hunter;

import java.io.File;
import java.io.FileWriter;
import java.io.IOException;
import java.util.Random;

public class FileThing {

    private static String[] trees = {
        "Boxwood", "Maple", "Magnolia", "Stinky", "Cherry", "Ash", "Pine", "Beech", "Teak",
            "Made up tree", "Bamboo", "Acacia"
    };

    public static void main(String[] args){
        FileThing thing1 = new FileThing();


        for(int i=1; i < 40; i++){
            thing1.writeFile("trees" + i + ".txt");
        }
    }

    public FileThing(){

    }

    public void writeFile(String someFileName) {

        File myFile = new File(someFileName);

        Random myRandom = new Random();

        if(!myFile.exists() ){
            System.out.println(someFileName + " doesn't exist.");
            //System.exit(1);
        }

        FileWriter writer = null;

        try{
            writer = new FileWriter(myFile, true);

            for(int i=0; i < 4; i++){
                writer.write(trees[myRandom.nextInt(trees.length)]);
                writer.write(System.lineSeparator());
            }
        }
        catch(IOException iox){
            System.out.println("Something went wrong." + iox.getMessage());
        }
        finally{
            try{ writer.close(); } catch(IOException iox){ /* do nothing */}
        }

    }


}

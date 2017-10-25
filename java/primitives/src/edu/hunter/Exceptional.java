package edu.hunter;

public class Exceptional {

    public static void main(String[] args){
        Exceptional e = new Exceptional();

        e.arrayTest();
    }

    public void arrayTest(){
        String[] myArray = new String[]{"item 1"};
        printAnItem(myArray, 11);
        printAnItem(null, 0);
        printAnItem(myArray, 0);
    }

    public void printAnItem(String[] anArray, int itemIndex){
        try {
            System.out.println(anArray[itemIndex]);
        }
        catch(ArrayIndexOutOfBoundsException
               | NullPointerException theException){
            System.err.println("Don't have that item.");
        }
        finally{
            System.out.println("Hi from finally!");
        }
    }

    public void printAnItem2(String[] anArray, int itemIndex) throws Exception{
        System.out.println(anArray[itemIndex]);
    }
}

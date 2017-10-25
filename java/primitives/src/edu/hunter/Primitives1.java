package edu.hunter;

public class Primitives1 {

    public static void main(String[] args){

        byte myByte = -128;
        say("myByte is: " + myByte);

        short aShort = 32767;
        say("aShort is: " + aShort);

        int someInt = 7;
        say("someInt is: " + someInt);

        long longVariableName = 700l;
        say("longVariableName is: " + longVariableName);

        float floatyFloatFloat = 77.123f;
        say("floatyFloatFloat is: " + floatyFloatFloat);

        double theDouble = 7_000_000_000d;
        say("theDouble is: " + theDouble);

        boolean yesOrNo = false;
        say("yesOrNo is: " + yesOrNo);

        char aLetter = '\'';
        say("aLetter is: " + aLetter);

        String sentence = "I'm getting sleepy.";
        say("sentence is: " + sentence);
        say("The third letter in sentence is: " + sentence.charAt(2));


        // How long is sentence
        say("sentence is " + sentence.length() + " characters long.");


        // Convert sentence to uppercase and print it out
        say(sentence.toUpperCase());

        // Does sentence contain the word 'in'?
        if(sentence.contains(" in ")){
            say("The sentence contains the word \"in\".");
        }else{
            say("The sentence does not contain the word \"in\".");
        }

        say("The sentence " + ( (sentence.contains(" in ") ) ? "contains" : "does not contain") + " the word \"in\".");

        if(sentence instanceof String){
            say("Sentence is a java.lang.String");
        }else{
            say("Sentence is not a java.lang.String");
        }

        Object thing = sentence;
        if(thing instanceof Integer){
            say("Sentence is a java.lang.Integer");
        }else{
            say("Sentence is not a java.lang.Integer");
        }



    }

    static void say(String stuff){
        System.out.println("Hello, " + stuff);
    }
}

package edu.hunter;

class ArithmeticDemo {

    public static void main (String[] args) {

        int myResult = 1 + 2;
        // myResult is now 3
        System.out.println("1 + 2 = " + myResult);
        int original_result = myResult;

        myResult = myResult - 1;
        // myResult is now 2
        System.out.println(original_result + " - 1 = " + myResult);
        original_result = myResult;

        myResult = myResult * 2;
        // myResult is now 4
        System.out.println(original_result + " * 2 = " + myResult);
        original_result = myResult;

        myResult = myResult / 2;
        // myResult is now 2
        System.out.println(original_result + " / 2 = " + myResult);
        original_result = myResult;

        myResult = myResult + 8;
        // myResult is now 10
        System.out.println(original_result + " + 8 = " + myResult);
        original_result = myResult;

        myResult = myResult % 7;
        // myResult is now 3
        System.out.println(original_result + " % 7 = " + myResult);
    }
}


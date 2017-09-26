package edu.hunter;

public class ControlFlow {
    private static int truths = 0;
    private static int falsehoods = 0;

    public static void main(String[] args){
//        testIf(true);
//        testIf(1 == 3);
//        testIf("this".equals("that"));
//        testIf(10 > 9);
//        report();
//        System.out.println("--------");
//        song(12);
//        System.out.println("--------");
//        song(4);
//        System.out.println("--------");
//        song(0);
//        System.out.println("--------");
//        song(432);

        long beginTime = System.currentTimeMillis();

        while(truths < 200000){
            testIf(true);
            report();
        }

        for(int i=0; i < 1000; i++){
            testIf( i % 2 == 0);
            report();

        }

        System.out.println("All in " + (System.currentTimeMillis() - beginTime) + " milliseconds.");

    }

    public static void testIf(boolean aCondition){

        if(aCondition == true){
            System.out.println("Your condition is true.");
            truths++;
        }else{
            System.out.println("Your condition is false.");
            falsehoods++;
        }

    }

    public static void report(){
        System.out.println("There have been " + truths + " truths.");
        System.out.println("There have been " + falsehoods + " falsehoods.");

    }

    @SuppressWarnings("squid:S128")
    public static void song(int dayNumber){

        switch(dayNumber) {
            case 12:
                System.out.println("12 Drummers Drumming             ");

            case 11:
                System.out.println("11 Pipers Piping                 ");

            case 10:
                System.out.println("10 Lords a Leaping               ");

            case 9:
                System.out.println("9 Ladies Dancing                 ");

            case 8:
                System.out.println("8 Maids a Milking                ");

            case 7:
                System.out.println("7 Swans a Swimming               ");

            case 6:
                System.out.println("6 Geese a Laying                 ");

            case 5:
                System.out.println("5 Golden Rings                   ");

            case 4:
                System.out.println("4 Calling Birds                  ");

            case 3:
                System.out.println("3 French Hens                    ");

            case 2:
                System.out.println("2 Turtle Doves                   ");

            case 1:
                System.out.println("and a Partridge in a Pear Tree   ");
                break;

            default:
                System.out.println("Nothing");
        }


    }
}












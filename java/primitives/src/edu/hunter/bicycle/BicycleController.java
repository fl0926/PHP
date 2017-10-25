package edu.hunter.bicycle;

import java.util.ArrayList;
import java.util.LinkedList;
import java.util.List;

public class BicycleController {

    public static void main(String[] args){
        BicycleController controller1 = new BicycleController();
//        controller1.doTest1(new BasicBicycle());
//        controller1.doTest1(new MountainBike());
//        controller1.doTest2(new MountainBike());

        List<Bicycle> bikeList = new LinkedList<>();

        bikeList.add(new BasicBicycle());
        bikeList.add(new MountainBike());
        bikeList.add(new BasicBicycle());
        bikeList.add(new MountainBike());
        bikeList.add(new BasicBicycle());

        for(Bicycle b : bikeList){
            System.out.println("Testing another Bicycle...\n");
            controller1.doTest1(b);
        }
    }

    public void doTest1(Bicycle aBike){
        say(aBike.toString());
        say("Increasing cadence to 10.");
        aBike.setCadence(10);

        say(aBike.toString());
        say("Applying brakes twice.");
        aBike.applyBrakes();
        aBike.applyBrakes();

        say(aBike.toString());
        say("Releasing brakes.");
        aBike.releaseBrakes();

        say(aBike.toString());

    }

    public void doTest2(MountainBike aBike){
        say(aBike.toString());

        say("Pedaling faster");
        aBike.setCadence(10);
        say(aBike.toString());

        for(int i = -5; i < 30; i++) {
            say("Setting gear to " + i);
            aBike.setCurrentGear(i);
            say(aBike.toString());
        }



    }



    /**
     * Outputs a message.
     *
     * @param msg String - Some message
     */
    private void say(String msg){
        System.out.println(msg);
    }
}

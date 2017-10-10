package edu.hunter.bicycle;

public class BicycleController {

    public static void main(String[] args){
        BicycleController controller1 = new BicycleController();
        controller1.doTest1(new BasicBicycle());
        controller1.doTest1(new MountainBike());
    }

    public void doTest1(Bicycle aBike){
        say("This Bicycle is a: " + aBike.getClass().getName());
        say("This bike is going " + aBike.getSpeed() + " mph.");
        say("The pedals are turning at a rate of " + aBike.getCadence());
        say("Increasing cadence to 10.");
        aBike.setCadence(10);

        say("This bike is going " + aBike.getSpeed() + " mph.");
        say("The pedals are turning at a rate of " + aBike.getCadence());
        say("Applying brakes twice.");
        aBike.applyBrakes();
        aBike.applyBrakes();
        say("This bike is going " + aBike.getSpeed() + " mph.");
        say("The pedals are turning at a rate of " + aBike.getCadence());
        say("Releasing brakes.");
        aBike.releaseBrakes();
        say("This bike is going " + aBike.getSpeed() + " mph.");
        say("The pedals are turning at a rate of " + aBike.getCadence());

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

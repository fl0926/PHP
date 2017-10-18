package edu.hunter.bicycle;

public class MountainBike extends BasicBicycle implements GearedBicycle {
    protected int currentGear = 1;

    @Override
    public int getSpeed(){
        return (this.cadence * this.currentGear) - this.brakingForce;
    }

    public void setCurrentGear(int newCurrentGear){
        if ( (newCurrentGear >= 1) && (newCurrentGear <= 21) ) {
            this.currentGear = newCurrentGear;
        }
    }

    public int getCurrentGear(){
        return this.currentGear;
    }


    @Override
    public String toString(){
        String retVal = super.toString();
        retVal = retVal + "        gear: " + this.getCurrentGear() + "\n";
        return retVal;
    }
    /*
     * Create methods to set and get the current gear.  Wouldn't it be
     * interesting to not allow the user to set a gear < 1 or > 21?
     *
     * It would also be interesting to see a "test2" method in BicycleController
     * that accepts a MountainBike and changes gears.
     *
     * All object inherit from java.lang.Object.  java.lang.Object has a
     * method that returns a String called toString().  Override that method
     * in both BasicBicycle and MountainBike to return a String containing
     * the current state.  That way we don't have to keep using all those
     * "say" method calls to report the current state.
     */
}

package edu.hunter.bicycle;

public class BasicBicycle implements Bicycle {
    private int cadence = 0;
    private int brakingForce = 0;
    private int cogSize = 3;

    /**
     * Returns the cadence at which the pedals are turning.
     *
     * @return int - the cadence.
     */
    @Override
    public int getCadence() {
        return this.cadence;
    }

    /**
     * Sets the cadence at which we want the pedals to turn.
     *
     * @param newCadence - The new cadence
     */
    @Override
    public void setCadence(int newCadence) {
        this.cadence = newCadence;
    }

    /**
     * Gets the current speed. The current speed is
     * (cadence * cogSize) - brakingForce;
     *
     * @return int current speed.
     */
    @Override
    public int getSpeed() {
        return (this.cadence * this.cogSize) - this.brakingForce;
    }

    /**
     * Increases the current braking force by 1;
     */
    @Override
    public void applyBrakes() {
        this.brakingForce++;
    }

    /**
     * Set braking force to 0;
     */
    @Override
    public void releaseBrakes() {
        this.brakingForce = 0;
    }
}

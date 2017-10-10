package edu.hunter.bicycle;

public interface Bicycle {

    /**
     * Returns the cadence at which the pedals are turning.
     *
     * @return int - the cadence.
     */
    public int getCadence();


    /**
     * Sets the cadence at which we want the pedals to turn.
     *
     * @param newCadence - The new cadence
     */
    public void setCadence(int newCadence);

    /**
     * Gets the current speed. The current speed is
     * (cadence * 3) - brakingForce;
     *
     * @return int current speed.
     */
    public int getSpeed();

    /**
     * Increases the current braking force by 1;
     */
    public void applyBrakes();

    /**
     * Set braking force to 0;
     */
    public void releaseBrakes();
}

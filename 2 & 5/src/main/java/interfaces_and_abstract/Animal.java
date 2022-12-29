/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package interfaces_and_abstract;

/**
 *
 * @author Acer
 */
public abstract class Animal {
    protected int legs;
    protected Animal(int legs)
    {
    this.legs=legs;
    }
    public void walk()
    {
    System.out.println("This animal walk by "+legs+" legs.");
    }
    public abstract void eat();
}

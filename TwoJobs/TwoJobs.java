/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package twojobs;

import java.util.Scanner;

/**
 *
 * @author Hadi
 */
public class TwoJobs {
    
    static Scanner sc = new Scanner(System.in);

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
       String day = sc.nextLine();
        String shanbe = "shanbe";
        String yekshanbe = "yekshanbe";
        String doshanbe = "doshanbe";
        String seshanbe = "seshanbe";
        String chaharshanbe = "chaharshanbe";
        String panjshanbe = "panjshanbe";
        String jome = "jome";
        
        String perspolisBank = "perspolis";
        String bahmanBank = "bahman";
        String tatil = "tatil";
        
        if (day.equals(shanbe)) {
            System.out.println(perspolisBank);
        }else if (day.equals(yekshanbe)) {
            System.out.println(bahmanBank);
        }else if (day.equals(doshanbe)) {
            System.out.println(perspolisBank);
        }else if (day.equals(seshanbe)) {
            System.out.println(bahmanBank);
        }else if (day.equals(chaharshanbe)) {
            System.out.println(perspolisBank);
        }else if (day.equals(panjshanbe)) {
            System.out.println(bahmanBank);
        }else if (day.equals(jome)) {
            System.out.println(tatil);
        }
        
    }
    
}

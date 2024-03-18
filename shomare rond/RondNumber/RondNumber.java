/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package rondnumber;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.Scanner;

/**
 *
 * @author Hadi
 */
public class RondNumber {

    /**
     * @param args the command line arguments
     */
    static Scanner sc = new Scanner(System.in);
    public static void main(String[] args) {
        int numberOfNumbers = sc.nextInt();
        ArrayList<Integer> numbers = new ArrayList<Integer>();
        for (int i = 0; i < numberOfNumbers; i++) {
            int b = sc.nextInt();
            numbers.add(b);
        }
        String rond = "Ronde!";
        String rondNist = "Rond Nist";
        
        for (int number : numbers) {
            if (has3inARow(number) || has4(number) || hasMirror(number)) {
                System.out.println(rond);
            }else{
                System.out.println(rondNist);
            }
        }
    }
    
    public static boolean has4(int num){
//        System.out.println(Integer.toString(num));
//        System.out.println(Integer.toString(num).toCharArray());
        char[] characters = Integer.toString(num).toCharArray();
//        for (char c : characters) {
//            System.out.println(c);
//        }
        int counter = 1;
        for (int i = 0; i < characters.length; i++) {
            for (int j = 0; j < characters.length; j++) {
                if (i != j && characters[i] == characters[j]) {
//                    System.out.println("character i " + characters[i]);
//                    System.out.println("character j " + characters[j]);
//                    System.out.println(counter);
                    counter++;
                }
            }
            if (counter >= 4) {
                return true;
            }else{
                counter = 1;
            }
        }
        return false;
    }
    
    public static boolean has3inARow(int num){
        char[] characters = Integer.toString(num).toCharArray();
        for (int i=0; i<characters.length; i++)
        {
            int cur_count = 1;
            for (int j=i+1; j<characters.length; j++)
            {
                if (characters[i] != characters[j])
                    break;
                cur_count++;
            }
 
            if (cur_count >= 3)
            {
                return true;
            }
        }
        return false;
    }
    
    public static boolean hasMirror(int num){
        char[] characters = Integer.toString(num).toCharArray();
        char[] charsReverse = new char[characters.length];
        int j = characters.length;
        for (int i = 0; i < characters.length; i++) {
            charsReverse[j - 1] = characters[i];
            j = j - 1;
        }
        return Arrays.equals(charsReverse, characters);
    }
    
}

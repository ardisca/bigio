	import java.util.*;
	import java.lang.*;
	import java.io.*;
	import java.math.*;
	
	public class Main {
		
		public static void main (String[] args) throws java.lang.Exception {
			Scanner kb = new Scanner(System.in);
			int test_cases = kb.nextInt();
			for(int cs = 1; cs <= test_cases; cs++){
				int n = kb.nextInt();
				 int a[] = new int[n];
				for(int i = 0; i < n; i++){
					a[i] = kb.nextInt();
				}
				findZigZagSequence(a, n);
			}
	    }
	   
		public static void findZigZagSequence(int [] a, int n){
			Arrays.sort(a);
			//1 2 3 4 5 6 7
			// int mid = (n + 1)/2;
			int mid = n / 2; //titik tengah
			// System.out.println(mid);
			// System.out.println(n);
			int temp = a[mid];
			// System.out.println(temp);
			a[mid] = a[n - 1];// a[6] = 7 , amid dimasuki 7

			a[n - 1] = temp; // a[n - 1], array terakhir dimasuki 3
			// System.out.println(temp);
		
			int st = mid + 1; //st=4
			int ed = n - 2; //st=5
			while(st <= ed){
				temp = a[st]; // disave temp
				a[st] = a[ed]; // ditukar
				a[ed] = temp; // ditukar
				st = st + 1;
				ed = ed - 1; // dirubah dari + 1 menjadi -1 agar a[ed] tidak kepanjangan
			}
			for(int i = 0; i < n; i++){
				if(i > 0) System.out.print(" ");
				System.out.print(a[i]);
			}
			System.out.println();
		}
	}

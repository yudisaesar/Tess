//Percabangan -------> IF'
#include<stdio.h>
#include<conio.h>
void main()
{ char nm[20];int nil=0; //deklarasi variable
  clrscr(); //bersihkan layar
  printf("Nama Mahasiswa   :");scanf("%s",nm);
  printf("Nilai            :");scanf("%i",nil);
  //Blok IF
  if (nil>70) //JIKA NILAI MEMENUHI KETENTUAN INI (TRUE)
  {printf("Hasil           :  LULUS");}
  else //jika nilai tidak memenuhi ketentuan (FALSE)
  {printf("Hasil           :  GAGAL");}
  getche ();
}

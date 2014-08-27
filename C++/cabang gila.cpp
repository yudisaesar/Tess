//Pencabangan--> IF
#include<stdio.h>
#include<conio.h>
#include<string.h>
void main()
{//deklarasi variable
char nama [10],mk[10]; int nilai=0,sks=0,ip=0,totnil=0,mutu=0;
//input data
printf("============================== \n");
printf("Nama Mahasiswa : ");scanf("%s",nama);
printf("Mata Kuliah    : ");scanf("%s",mk);
printf("Nilai          : ");scanf("%i",&nilai);
printf("SKS            : ");scanf("%i",&sks);
printf("============================== \n");
//proses filtering
if (nilai>=85){mutu=4;}
else if(nilai>=70){mutu=3;}
else if(nilai>=60){mutu=2;}
else if(nilai>=50){mutu=1;}
else{mutu=0;}
//proses cari IP
totnil=sks*mutu,ip=totnil/sks;
clrscr();//bersihkan layar
//cetak outputnya
printf("============================== \n");
printf("Hasil :\n");
printf("Indeks Prestasi Siswa \n");
printf("Nama Mahasiswa : %s\n",nama);
printf("Mata Kuliah    : %s\n",mk);
printf("Nilai          : %i\n",nilai);
printf("SKS            : %i\n",sks);
printf("Mutu           : %i\n",mutu);
printf("IP             : %i\n",ip);
printf("============================== \n");
getche();}

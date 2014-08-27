//Pencabangan--> IF
#include<stdio.h>
#include<conio.h>
#include<string.h>
void main()
{//deklarasi variable
char nama [10],nilai[10]; int mutu=10;
long sks=9,ip=0,tn=0,mk=0;
//input data
printf("Nama Mahasiswa : ");scanf("%s",nama);
printf("Mata Kuliah    : ");scanf("%s",mk);
printf("Nilai          : ");scanf("%i",nilai);
//proses filtering
if (mutu=4)
   {strcpy(nilai,"85-100");}
else if(mutu=3)
   {strcpy(nilai,"70-84.99");}
else if(mutu=2)
   {strcpy(nilai,"60-69.99");}
else if(mutu=1)
   {strcpy(nilai,"50-59.99");}
else
	{strcpy(nilai,"0-49.99");}
//proses
tn=sks*mutu,ip=tn/sks;
clrscr();//bersihkan layar
//cetak outputnya
printf("Hasil : ");
printf("Indeks Prestasi Siswa");
printf("Nama  Siswa     : %s",nama);
printf("Mata Kuliah     : %s",mk);
printf("SKS             : %i",sks);
printf("Nilai           : %i",tn);
printf("Mutu            : %i",mutu);
printf("IP              : %i",ip);
getche();}

#include "Client_header.h"
#include <stdio.h>
#include <string>
#include <fstream>
#include<iostream>
#include<cstdlib>
#include <windows.h>
extern "C"
typedef void(*LPMYDLLFUNC)(char*, int*);
using namespace std;
char* ReadFile() {
	FILE *f = freopen("in.txt", "a+", stdin);
	long len;
	if (f == NULL) { perror("Ошибка открытия файла"); }
	else
	{
		fseek(f, 0, SEEK_END);
		len = ftell(f);
		fseek(f, 0, SEEK_SET);
	}
	char *buffer = (char*)malloc(len + 1);
	int i = 0;
	for (i = 0; i <= len; i++)
	{
		scanf("%c", &buffer[i]);
	}
	buffer[i] = '\0';
	return buffer;
}
int main()
{
	setlocale(LC_ALL, "rus");
	ofstream fout;
	fout.open("result.txt", ios_base::out);
	char*buf = ReadFile();
	int count = 0;
	HMODULE hDll = LoadLibrary(L"SimpleDll.dll");
	if (hDll == NULL)
	{
		printf("Error loading library!\n");
		return 0;
	}
	LPMYDLLFUNC Funcletter = (LPMYDLLFUNC)GetProcAddress(hDll,"CountLetters");
	LPMYDLLFUNC Funcwords = (LPMYDLLFUNC)GetProcAddress(hDll, "CountWords");
	LPMYDLLFUNC Funcsentences = (LPMYDLLFUNC)GetProcAddress(hDll, "CountSentences");
	LPMYDLLFUNC Funcspaces = (LPMYDLLFUNC)GetProcAddress(hDll, "CountOfSpaces");
	LPMYDLLFUNC Funcsplitters = (LPMYDLLFUNC)GetProcAddress(hDll, "CountOfSplitters");
	if (Funcletter != NULL && Funcwords !=NULL && Funcsentences !=NULL && Funcspaces !=NULL && Funcsplitters !=NULL)
	{
		
		Funcletter(buf,&count);
		printf("Количество букв = %d\n", count);
		fout << "Количество букв = " << count << endl;
		Funcwords(buf, &count);
		printf("Количество букв = %d\n", count);
		fout << "Количество букв = " << count << endl;
		Funcsentences(buf, &count);
		printf("Количество букв = %d\n", count);
		fout << "Количество букв = " << count << endl;
		Funcspaces(buf, &count);
		printf("Количество букв = %d\n", count);
		fout << "Количество букв = " << count << endl;
		Funcsplitters(buf, &count);
		printf("Количество букв = %d\n", count);
		fout << "Количество букв = " << count << endl;
	}

	FreeLibrary(hDll);
	return 0;
}

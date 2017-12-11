#include <stdio.h>
#include <string>
#include <fstream>
#include<iostream>
#include<cstdlib>
#include<SimpleDll.h>

using namespace std;

char* ReadFile() {
		setlocale(LC_ALL, "rus");
		FILE *f = freopen("in.txt", "a+", stdin);
		long len;
		if (f == NULL) { perror("������ �������� �����"); }
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
	ofstream fout;
	fout.open("result.txt", ios_base::out);
	char*buf = ReadFile(); 
	setlocale(LC_ALL, "rus");
	int count = 0;
	CountLetters(buf, &count);
	printf("���������� ���� = %d\n", count);
	fout << "���������� ���� = " << count << endl;
	CountWords(buf, &count);
	printf("���������� ���� = %d\n", count);
	fout << "���������� ���� =" << count << endl;
	CountSentences(buf, &count);
	printf("���������� ����������� = %d\n", count);
	fout << "���������� ����������� = " << count << endl;
	CountOfSpaces(buf, &count);
	printf("���������� �������� = %d\n", count);
	fout << "���������� �������� = " << count << endl;
	CountOfSplitters(buf, &count);
	printf("���������� ������������ = %d\n", count);
	fout << "���������� ������������ =" << count << endl;
	fout.close();
	return 0;
}
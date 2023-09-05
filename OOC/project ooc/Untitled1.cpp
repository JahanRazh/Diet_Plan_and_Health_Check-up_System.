#include<stdio.h>
int main()
{

int num=0;
int tot=0;

printf("Enter the num:");
scanf("%d",&num);

while(!(num==0))
{	tot=tot+num;
	printf("Enter the num:");
	scanf("%d",&num);
}	
printf("total is %d:",tot);	
	
}

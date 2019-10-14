#include<iostream>
using namespace std;

bool sushu(int n,int m)
{
	int mid=0;
	for(int i =2;i<n;i++)
	{
		if (n%i==0) mid++;
	}
		for(int i =2;i<m;i++)
	{
		if (m%i==0) mid++;
		
	}
	if(mid==0) return true;
	else return false;
	
}

void Goldbach(int n)
{

	for(int i=2;i<=n;i++)
	{
	//	cout<<"f1";
		for(int j=2;j<=n;j++)
		{
		//	cout<<"f2";
				if (j==n/2&&i==n/2)goto re;
				if((sushu(i,j))&&n==j+i)
			{
				cout<<n<<"="<<i<<"+"<<j<<endl;
			
			}
			
		}
	}
re:
	if(sushu(n/2,n/2))
	cout<<n<<"="<<n/2<<"+"<<n/2<<endl;


}


int main()  
{  
  int number;  
  cin >> number; 
  Goldbach(number);  
  return 0;  
}  

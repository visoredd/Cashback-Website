#include<reg52.h>
sbit S1=P2^1;// connect switch 1 to Port2.0 for forward
sbit S2=P2^2; //used for backward
sbit S3=P2^3; // used for STOP
sbit S4=P2^4; // used for right turn
sbit S5=P2^5; // used for left turn
sbit motor_pin_1 = P3^0;
sbit motor_pin_2 = P3^1;
sbit motor_pin_3 = P3^2;
sbit motor_pin_4 = P3^3;
void delay(unsigned int);
void main ()
{
	S1=1;//set switch as high
	S2=1;
	S3=1;
	S4=1;
	S5=1;
	P3=0x00; //set Port 3 to low
	while(1) //infinte loop
	{
		if(S1==0) //check swith is low(if anybody press switch 1?)
		{
			delay(10);
			//P3=0x05;
			motor_pin_1 = 0;
			motor_pin_2 = 1;
			motor_pin_3 = 0;
			motor_pin_4 = 1;
		}
		else if(S2==0)
		{
			delay(10);
			//P3=0x0a;
			motor_pin_1 = 1;
			motor_pin_2 = 0;
			motor_pin_3 = 1;
			motor_pin_4 = 0;
		}
		else if (S3==0)
		{
			delay(5);
			motor_pin_1 = 0;
			motor_pin_2 = 0;
			motor_pin_3 = 0;
			motor_pin_4 = 0;
		}
		if (S4==0)
		{
			delay(5);
			motor_pin_1 = 1;
			motor_pin_2 = 0;
			motor_pin_3 = 0;
			motor_pin_4 = 0;
		}
		if (S5==0)
		{
			delay(5);
			motor_pin_1 = 0;
			motor_pin_2 = 0;
			motor_pin_3 = 1;
			motor_pin_4 = 0;
		}
	}
}
void delay (unsigned int z) //delay function
{
	unsigned i,j;
	for(i=0;i<z;i++);
		for(j=0;j<1275;j++);
}
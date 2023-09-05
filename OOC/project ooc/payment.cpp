// Diet Plan and Health Check up System.cpp : This file contains the 'main' function. Program execution begins and ends there.
//

#include <iostream>
#include <string>

using namespace std;

class payment
{
    private:
        int payment_id;
        string Payment_type;

    public:
        void setpayment_Details(int payid,string paytype);
        void Confirm_payment();
};
int main()
{   
    payment pay1;
    pay1.setpayment_Details(002,"online payment");
    pay1.Confirm_payment();
}

void payment::setpayment_Details(int payid,string paytype)
{
    payment_id = payid;
    Payment_type = paytype;
}
void payment::Confirm_payment()
{
    cout << "Payment Successfully"<<endl;
	cout<<"Payment ID:"<<payment_id<<endl;
	cout<<"Type:"<< Payment_type;
}

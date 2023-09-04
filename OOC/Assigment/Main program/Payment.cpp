#include <iostream>
#include <string>
#include "Payment.h"
using namespace std;


// Payment class
void Payment::setpayment_Details(int payid, string paytype)
{
    payment_id = payid;
    Payment_type = paytype;
}

void Payment::Confirm_payment()
{
    cout << "Payment Successfully" << endl;
    cout << "Payment ID: " << payment_id << endl;
    cout << "Type: " << Payment_type << endl << endl;
}


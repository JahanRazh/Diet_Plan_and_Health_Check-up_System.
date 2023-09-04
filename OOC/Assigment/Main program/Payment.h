#pragma once
#include<string>


class Payment
{
	private:

		int payment_id;
		string Payment_type;

	public:
		// Set the details of the payment
		void setpayment_Details(int payid, string paytype);
		// Confirm the payment
		void Confirm_payment();
};

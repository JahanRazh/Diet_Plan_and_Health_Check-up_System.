#include <iostream>
#include <string>

using namespace std;

class Patient
{
	private:
    	
		string username;
    	int userId;
    	string password;

	public:
    
    	int manageProfile(string newUsername, int newUserId,string newPassword);
    	void viewAppointment();
};


class Payment
{
	private:
    	
		int payment_id;
    	string Payment_type;

	public:
    	
		void setpayment_Details(int payid, string paytype);
    	void Confirm_payment();
};


class Report
{
	private:
    	
		int Report_id;
    	string Report_type;
    	string Recommendation;

	public:
    	
		void setgeneratereport(int repid, string Retype, string Recm);
    	void reportDetails();
};


class Health_checkup
{
	private:
    	
		int checkup_id;
    	string checkup_name;
    	string checkup_type;
    	string doctorname;
    	string date;
    	string results;

	public:
    	
		void setHealthCheckup(int id, const string& name, const string& type, const string& doctor, string checkupDate, const string& res);
    	void displayHealthCheckup();
};


class Diet_plan {
	private:
    	
		int planId;
    	string planName;
    	string startDay;
    	string endDay;

	public:
    	
		void setDietPlan(int id, string name, string start, string end);
    	void viewDietPlan();
};


class Manage {
	private:
    	int ManageId;
    	string Date;
    	string option;

	public:
    	void scheduleAppointment(int MngId, string D, string opt);
    	void updateAppointment();
    	void cancelAppointment();
};


class Admin {

	private:
    	string staffID;
		string admin_name;
    	string password;
    	

	public:
    	void setadmindetails(string sid,string adname,string pwd);
		void addPatient();
    	void removePatient();

};


class Appointment
{
	private:
    	int Appointmentid;
    	string Appointmenttype;

	public:
    	void setappointment(int appid, string Apptype);
    	void viewappointmentDetails();
};


// Patient class



int Patient::manageProfile(string newUsername, int newUserId,string newPassword)
{
    cout << "Managing profile for user: " << username << endl;
    // Implement the code to manage the patient's profile here
    // You can provide options to update username, userId, and password
    // For example:
    
    cout << "Enter new username: ";
    cin >> username;

    cout << "Enter new user ID: ";
    cin >> username;
    
    cout << "New password: ";
    cin >> password;
    

    cout << "Profile updated successfully!\n\n";
    return 0;
}

void Patient::viewAppointment()
{
    cout << "Viewing appointments for user: " << username << endl;
    // Implement the code to view the patient's appointments here
    // For example:
    cout << "Here are your upcoming appointments:\n";
    cout << "1. Appointment for Health check-up 1\n";
}


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
    cout << "Type: " << Payment_type << endl<<endl;
}


// Report class
void Report::setgeneratereport(int repid, string Retype, string Recm)
{
    Report_id = repid;
    Report_type = Retype;
    Recommendation = Recm;
}

void Report::reportDetails()
{
    cout << "Report ID: " << Report_id << endl;
    cout << "Report Type: " << Report_type << endl;
    cout << "Recommendation: " << Recommendation << endl;
}


// Health_checkup class
void Health_checkup::setHealthCheckup(int id, const string& name, const string& type, const string& doctor, string checkupDate, const string& res)
{
    checkup_id = id;
    checkup_name = name;
    checkup_type = type;
    doctorname = doctor;
    date = checkupDate;
    results = res;
}

void Health_checkup::displayHealthCheckup()
{
    // Accessing member variables
    cout << "Checkup ID: " << checkup_id << endl;
    cout << "Checkup Name: " << checkup_name << endl;
    cout << "Checkup Type: " << checkup_type << endl;
    cout << "Doctor: " << doctorname << endl;
    cout << "Date: " << date << endl;
    cout << "Results: " << results << endl;
}


// Diet_plan class
void Diet_plan::setDietPlan(int id, string name, string start, string end)
{
    planId = id;
    planName = name;
    startDay = start;
    endDay = end;
}

void Diet_plan::viewDietPlan()
{
    cout << "Diet Plan ID: " << planId << endl;
    cout << "Diet Plan Name: " << planName << endl;
    cout << "Start Day: " << startDay << endl;
    cout << "End Day: " << endDay << endl;
}


// Manage class
void Manage::scheduleAppointment(int MngId, string D, string opt)
{
    // Implement logic to schedule an appointment
    ManageId = MngId;
    Date = D;
    option = opt;
    cout << "Appointment scheduled successfully!" << endl;
}

void Manage::updateAppointment()
{
    // Implement logic to update an appointment
    //cout << "Appointment updated successfully!"<< endl;
}

void Manage::cancelAppointment()
{
    // Implement logic to cancel an appointment
    //cout << "Appointment canceled successfully!" << endl;
}


// Admin class
void Admin::setadmindetails(string sid,string adname,string pwd)
{
	staffID=sid;
	admin_name=adname;
    password=pwd;	
}

void Admin::addPatient()
{
    // Implement logic to add a patient
    cout << "Patient added successfully!" << endl;
}

void Admin::removePatient()
{
    // Implement logic to remove a patient
    //cout << "Patient removed successfully!" << endl;
}


// Appointment class
void Appointment::setappointment(int appid, string Apptype)
{
    Appointmentid = appid;
    Appointmenttype = Apptype;
}

void Appointment::viewappointmentDetails()
{
    // Implementation for viewing the appointment details
    cout << "Appointment ID: " << Appointmentid << endl;
    cout << "Appointment Type: " << Appointmenttype << endl;
}


int main()
{
    // Create objects of the classes
    Patient patient;
    patient.manageProfile("John", 12345, "password");
    patient.viewAppointment();
	
	cout<<endl;
	
	Appointment appointment;
    appointment.setappointment(1, "Checkup");
    appointment.viewappointmentDetails();

	cout<<endl;

    Health_checkup checkup;
    checkup.setHealthCheckup(1, "Routine Checkup", "General", "Dr. Ruwan", "2023/05/30", "Normal");
    checkup.displayHealthCheckup();

	cout<<endl;
	
    Diet_plan dietPlan;
    dietPlan.setDietPlan(1, "Weight Loss Plan", "2023/06/01", "2023/06/30");
    dietPlan.viewDietPlan();

	cout<<endl;

    Manage appointmentManager;
    appointmentManager.scheduleAppointment(1, "2023-06-01", "Option 1");
    appointmentManager.updateAppointment();
    appointmentManager.cancelAppointment();

	cout<<endl;

    Admin admin;
    admin.setadmindetails("st123","jahan","RJ3165");
    admin.addPatient();
    admin.removePatient();
    
    cout<<endl;
    
    Report dpReport;
    dpReport.setgeneratereport(1, "Diet Plan", "Follow the recommended diet plan strictly.");
    dpReport.reportDetails();
	
	cout<<endl;
	
    Report hCReport;
    hCReport.setgeneratereport(2, "Health Check-up", "You are in good health. Continue to follow a healthy lifestyle.");
    hCReport.reportDetails();
	
	cout<<endl;
	
	Payment Pay; 
	Pay.setpayment_Details(1,"online payment");
	Pay.Confirm_payment();


    return 0;

}


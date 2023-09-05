#include <iostream>
#include <string>

using namespace std;

class Appointment 
{
	private:
        
		int Appointmentid;
        string Appointmenttype;
        
    public:
    	void setappointment(int appid, string Apptype);
        void viewappointmentDetails();

};


int main() {
    Appointment appointment;
    
    // Call member functions of the Appointment class
    appointment.setappointment(1, "Checkup");
    appointment.viewappointmentDetails();
    
    return 0;
}


void Appointment::setappointment(int appid, string Apptype) {
    Appointmentid = appid;
	Appointmenttype = Apptype;
}

void Appointment::viewappointmentDetails() {
    // Implementation for viewing the appointment details
    cout << "Appointment ID: " << Appointmentid << endl;
    cout << "Appointment Type: " << Appointmenttype << endl;
}


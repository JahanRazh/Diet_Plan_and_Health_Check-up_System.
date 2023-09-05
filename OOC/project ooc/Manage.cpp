#include <iostream>
#include <string>

using namespace std;

class Manage{

private:
    int ManageId;
    string Date;
    string option;

public:
    void scheduleAppointment(int MngId,string D,string opt);
    void updateAppointment();
    void cancelAppointment();
	
};

int main() 
{
    Manage appointmentManager;

    appointmentManager.scheduleAppointment(1, "2023-06-01", "Option 1");
    appointmentManager.updateAppointment();
    appointmentManager.cancelAppointment();

    return 0;
}

void Manage::scheduleAppointment(int MngId,string D,string opt)
	{
        // Implement logic to schedule an appointment
        ManageId=MngId;
        Date=D;
        option=opt;
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

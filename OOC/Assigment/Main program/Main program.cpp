
#include <iostream>
#include <string>

#include "Patient.h"
#include "Appointment.h"
#include "Health_checkup.h"
#include "Diet_plan.h"
#include "Manage.h"
#include "Admin.h"
#include "Report.h"
#include "Payment.h"

using namespace std;

int main()
{
    // Create objects of the classes
    Patient patient;
    patient.manageProfile("John", 12345, "password");
    patient.viewAppointment();

    cout << endl;

    Appointment appointment;
    appointment.setappointment(1, "Checkup");
    appointment.viewappointmentDetails();

    cout << endl;

    Health_checkup checkup;
    checkup.setHealthCheckup(1, "Routine Checkup", "General", "Dr. Ruwan", "2023/05/30", "Normal");
    checkup.displayHealthCheckup();

    cout << endl;
    
    Diet_plan dietPlan;
    dietPlan.setDietPlan(1, "Weight Loss Plan", "2023/06/01", "2023/06/30");
    dietPlan.viewDietPlan();

    cout << endl;

    Manage appointmentManager;
    appointmentManager.scheduleAppointment(1, "2023-06-01", "Option 1");
    appointmentManager.updateAppointment();
    appointmentManager.cancelAppointment();

    cout << endl;

    Admin admin;
    admin.setadmindetails("st123", "jahan", "RJ3165");
    admin.addPatient();
    admin.removePatient();

    cout << endl;

    Report dpReport;
    dpReport.setgeneratereport(1, "Diet Plan", "Follow the recommended diet plan strictly.");
    dpReport.reportDetails();

    cout << endl;

    Report hCReport;
    hCReport.setgeneratereport(2, "Health Check-up", "You are in good health. Continue to follow a healthy lifestyle.");
    hCReport.reportDetails();

    cout << endl;

    Payment Pay;
    Pay.setpayment_Details(1, "online payment");
    Pay.Confirm_payment();


    return 0;
}
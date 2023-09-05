#include <iostream>
#include <string>

using namespace std;

class Admin {
	
    private:
        string username;
        int post;
        string password;
        int staffID;

    public:
    
        void addPatient();
        void removePatient();
    
};

int main() {
    Admin admin;

    admin.addPatient();
    admin.removePatient();

    return 0;
}

void Admin::addPatient() {
    // Implement logic to add a patient
    cout << "Patient added successfully!" << endl;
}

void Admin::removePatient() {
    // Implement logic to remove a patient
    //cout << "Patient removed successfully!" << endl;
}


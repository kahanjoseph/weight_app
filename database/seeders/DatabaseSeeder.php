<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Project;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//         User::factory()->create([
//             'name' => 'Test User',
//             'email' => 'test@example.com',
//         ]);

          $jsonString = '[
            { "day": 1, "choices": [ { "project": "Simple Portfolio Website", "stack": "HTML/CSS" }, { "project": "Personal Blog Template", "stack": "React" } ] },
            { "day": 2, "choices": [ { "project": "To-Do List App", "stack": "React" }, { "project": "Responsive Photo Gallery", "stack": "Vue.js" } ] },
            { "day": 3, "choices": [ { "project": "Weather App using OpenWeatherMap API", "stack": "React" }, { "project": "Calculator App", "stack": "Vue.js" } ] },
            { "day": 4, "choices": [ { "project": "Simple Quiz App", "stack": "Angular" }, { "project": "Countdown Timer", "stack": "Svelte" } ] },
            { "day": 5, "choices": [ { "project": "Interactive Gallery", "stack": "React" }, { "project": "Recipe Site", "stack": "Vue.js" } ] },
            { "day": 6, "choices": [ { "project": "Landing Page Clone", "stack": "HTML/CSS" }, { "project": "Digital Clock", "stack": "Svelte" } ] },
            { "day": 7, "choices": [ { "project": "Simple Login Form", "stack": "HTML/CSS" }, { "project": "Tic-Tac-Toe Game", "stack": "React" } ] },
            { "day": 8, "choices": [ { "project": "Portfolio with Bootstrap", "stack": "Bootstrap" }, { "project": "Product Landing Page with TailwindCSS", "stack": "TailwindCSS" } ] },
            { "day": 9, "choices": [ { "project": "Blog with Materialize CSS", "stack": "Materialize CSS" }, { "project": "Simple E-commerce Site with Bulma", "stack": "Bulma" } ] },
            { "day": 10, "choices": [ { "project": "Form with Bootstrap", "stack": "Bootstrap" }, { "project": "Dashboard with TailwindCSS", "stack": "TailwindCSS" } ] },
            { "day": 11, "choices": [ { "project": "Pricing Table with Materialize CSS", "stack": "Materialize CSS" }, { "project": "Simple Chat UI with Bulma", "stack": "Bulma" } ] },
            { "day": 12, "choices": [ { "project": "Navbar with Bootstrap", "stack": "Bootstrap" }, { "project": "Footer with TailwindCSS", "stack": "TailwindCSS" } ] },
            { "day": 13, "choices": [ { "project": "Card Layout with Materialize CSS", "stack": "Materialize CSS" }, { "project": "Hero Section with Bulma", "stack": "Bulma" } ] },
            { "day": 14, "choices": [ { "project": "Responsive Grid with Bootstrap", "stack": "Bootstrap" }, { "project": "Profile Card with TailwindCSS", "stack": "TailwindCSS" } ] },
            { "day": 15, "choices": [ { "project": "Todo App with jQuery", "stack": "jQuery" }, { "project": "Modal Popup with jQuery", "stack": "jQuery" } ] },
            { "day": 16, "choices": [ { "project": "Event Countdown Timer with Moment.js", "stack": "Moment.js" }, { "project": "Data Table with DataTables.js", "stack": "DataTables.js" } ] },
            { "day": 17, "choices": [ { "project": "Weather App with Axios", "stack": "Axios" }, { "project": "Simple Blog using Fetch API", "stack": "Fetch API" } ] },
            { "day": 18, "choices": [ { "project": "Interactive Map with Leaflet.js", "stack": "Leaflet.js" }, { "project": "Form Validation with Validate.js", "stack": "Validate.js" } ] },
            { "day": 19, "choices": [ { "project": "Charting with Chart.js", "stack": "Chart.js" }, { "project": "Graphs with D3.js", "stack": "D3.js" } ] },
            { "day": 20, "choices": [ { "project": "Image Slider with Slick Carousel", "stack": "Slick Carousel" }, { "project": "Lightbox Gallery with Lightbox.js", "stack": "Lightbox.js" } ] },
            { "day": 21, "choices": [ { "project": "Searchable List with Fuse.js", "stack": "Fuse.js" }, { "project": "Drag and Drop with Sortable.js", "stack": "Sortable.js" } ] },
            { "day": 22, "choices": [ { "project": "Basic Portfolio with React", "stack": "React" }, { "project": "Simple Blog with React", "stack": "React" } ] },
            { "day": 23, "choices": [ { "project": "Weather App with React", "stack": "React" }, { "project": "Portfolio Site with Pure CSS", "stack": "Pure CSS" } ] },
            { "day": 24, "choices": [ { "project": "Calculator with React", "stack": "React" }, { "project": "Countdown Timer with Vue.js", "stack": "Vue.js" } ] },
            { "day": 25, "choices": [ { "project": "Tic-Tac-Toe Game with React", "stack": "React" }, { "project": "Contact Form with Svelte", "stack": "Svelte" } ] },
            { "day": 26, "choices": [ { "project": "Recipe App with React", "stack": "React" }, { "project": "Notes App with Angular", "stack": "Angular" } ] },
            { "day": 27, "choices": [ { "project": "Interactive Quiz with React", "stack": "React" }, { "project": "Photo Gallery with Vue.js", "stack": "Vue.js" } ] },
            { "day": 28, "choices": [ { "project": "Portfolio with React and Styled Components", "stack": "React + Styled Components" }, { "project": "Blog with React and TailwindCSS", "stack": "React + TailwindCSS" } ] },
            { "day": 29, "choices": [ { "project": "Simple API with Node.js/Express", "stack": "Node.js/Express" }, { "project": "RESTful Blog API with Node.js/Express", "stack": "Node.js/Express" } ] },
            { "day": 30, "choices": [ { "project": "User Authentication with Passport.js", "stack": "Node.js/Express + Passport.js" }, { "project": "JWT Authentication with Node.js/Express", "stack": "Node.js/Express + JWT" } ] },
            { "day": 31, "choices": [ { "project": "Simple Chat App with Socket.io", "stack": "Node.js/Express + Socket.io" }, { "project": "Basic CRUD App with Node.js/Express", "stack": "Node.js/Express" } ] },
            { "day": 32, "choices": [ { "project": "Todo API with Node.js/Express", "stack": "Node.js/Express" }, { "project": "Weather API with Node.js/Express", "stack": "Node.js/Express" } ] },
            { "day": 33, "choices": [ { "project": "File Upload with Multer", "stack": "Node.js/Express + Multer" }, { "project": "Email Sending with Nodemailer", "stack": "Node.js/Express + Nodemailer" } ] },
            { "day": 34, "choices": [ { "project": "Simple Blog with EJS", "stack": "Node.js/Express + EJS" }, { "project": "Portfolio with Handlebars.js", "stack": "Node.js/Express + Handlebars.js" } ] },
            { "day": 35, "choices": [ { "project": "E-commerce Backend with Node.js/Express", "stack": "Node.js/Express" }, { "project": "Event Management API with Node.js/Express", "stack": "Node.js/Express" } ] },
            { "day": 36, "choices": [ { "project": "Full-Stack Todo App (React + Node.js/Express)", "stack": "React + Node.js/Express" }, { "project": "Full-Stack Blog (React + Node.js/Express)", "stack": "React + Node.js/Express" } ] },
            { "day": 37, "choices": [ { "project": "Full-Stack Weather App (React + Node.js/Express)", "stack": "React + Node.js/Express" }, { "project": "Full-Stack Recipe App (React + Node.js/Express)", "stack": "React + Node.js/Express" } ] },
            { "day": 38, "choices": [ { "project": "Full-Stack Notes App (React + Node.js/Express)", "stack": "React + Node.js/Express" }, { "project": "Full-Stack Quiz App (React + Node.js/Express)", "stack": "React + Node.js/Express" } ] },
            { "day": 39, "choices": [ { "project": "Full-Stack Portfolio (React + Node.js/Express)", "stack": "React + Node.js/Express" }, { "project": "Full-Stack E-commerce (React + Node.js/Express)", "stack": "React + Node.js/Express" } ] },
            { "day": 40, "choices": [ { "project": "Full-Stack Chat App (React + Node.js/Express)", "stack": "React + Node.js/Express" }, { "project": "Full-Stack Event Management App (React + Node.js/Express)", "stack": "React + Node.js/Express" } ] },
            { "day": 41, "choices": [ { "project": "Full-Stack Contact Form (React + Node.js/Express)", "stack": "React + Node.js/Express" }, { "project": "Full-Stack Blog with Authentication (React + Node.js/Express)", "stack": "React + Node.js/Express" } ] },
            { "day": 42, "choices": [ { "project": "Full-Stack File Upload (React + Node.js/Express)", "stack": "React + Node.js/Express" }, { "project": "Full-Stack Photo Gallery (React + Node.js/Express)", "stack": "React + Node.js/Express" } ] },
            { "day": 43, "choices": [ { "project": "Todo App", "stack": "Vue.js" }, { "project": "Weather App", "stack": "Vue.js" } ] },
            { "day": 44, "choices": [ { "project": "Calculator", "stack": "Vue.js" }, { "project": "Countdown Timer", "stack": "Vue.js" } ] },
            { "day": 45, "choices": [ { "project": "Tic-Tac-Toe Game", "stack": "Vue.js" }, { "project": "Contact Form", "stack": "Vue.js" } ] },
            { "day": 46, "choices": [ { "project": "Todo App", "stack": "Angular" }, { "project": "Weather App", "stack": "Angular" } ] },
            { "day": 47, "choices": [ { "project": "Calculator", "stack": "Angular" }, { "project": "Countdown Timer", "stack": "Angular" } ] },
            { "day": 48, "choices": [ { "project": "Tic-Tac-Toe Game", "stack": "Angular" }, { "project": "Contact Form", "stack": "Angular" } ] },
            { "day": 49, "choices": [ { "project": "Todo App", "stack": "Svelte" }, { "project": "Weather App", "stack": "Svelte" } ] },
            { "day": 50, "choices": [ { "project": "Calculator", "stack": "Svelte" }, { "project": "Countdown Timer", "stack": "Svelte" } ] },
            { "day": 51, "choices": [ { "project": "Interactive Data Table using DataTables", "stack": "DataTables + jQuery" }, { "project": "Simple eCommerce Frontend", "stack": "HTML/CSS" } ] },
            { "day": 52, "choices": [ { "project": "Kanban Board", "stack": "Vue.js" }, { "project": "Markdown Editor", "stack": "React" } ] },
            { "day": 53, "choices": [ { "project": "Expense Tracker", "stack": "React" }, { "project": "Personal Budget App", "stack": "Vue.js" } ] },
            { "day": 54, "choices": [ { "project": "Netflix Clone Home Page", "stack": "React + Styled Components" }, { "project": "Spotify Clone Home Page", "stack": "Next.js + TailwindCSS" } ] },
            { "day": 55, "choices": [ { "project": "Social Media Dashboard", "stack": "Vue.js" }, { "project": "Simple Job Listing App", "stack": "React" } ] },
            { "day": 56, "choices": [ { "project": "Admin Dashboard", "stack": "React + TailwindCSS" }, { "project": "Weather Forecast App", "stack": "Angular" } ] },
            { "day": 57, "choices": [ { "project": "Real-time Chat App", "stack": "React + Firebase" }, { "project": "Real-time Location Tracking App", "stack": "Vue.js + Firebase" } ] },
            { "day": 58, "choices": [ { "project": "Movie Search App", "stack": "React + OMDb API" }, { "project": "Song Lyrics Finder", "stack": "Vue.js + Lyrics.ovh API" } ] },
            { "day": 59, "choices": [ { "project": "E-commerce Product Page", "stack": "React" }, { "project": "Travel Booking Website", "stack": "Angular" } ] },
            { "day": 60, "choices": [ { "project": "Trivia Quiz App", "stack": "React" }, { "project": "Flashcard Learning App", "stack": "Vue.js" } ] },
            { "day": 61, "choices": [ { "project": "Currency Converter", "stack": "Angular + ExchangeRate-API" }, { "project": "Unit Converter", "stack": "React" } ] },
            { "day": 62, "choices": [ { "project": "GitHub User Finder", "stack": "React" }, { "project": "GitHub Repo Search", "stack": "Vue.js" } ] },
            { "day": 63, "choices": [ { "project": "Simple CRM", "stack": "React + Node.js/Express" }, { "project": "Contact Manager", "stack": "Vue.js + Firebase" } ] },
            { "day": 64, "choices": [ { "project": "Booking System", "stack": "React + Node.js/Express" }, { "project": "Event RSVP System", "stack": "Vue.js + Firebase" } ] },
            { "day": 65, "choices": [ { "project": "Basic Blogging Platform", "stack": "React + Node.js/Express" }, { "project": "Newsletter Subscription Platform", "stack": "Vue.js + Firebase" } ] },
            { "day": 66, "choices": [ { "project": "Online Polling App", "stack": "React + Node.js/Express" }, { "project": "Survey Creation App", "stack": "Vue.js + Firebase" } ] },
            { "day": 67, "choices": [ { "project": "Real-time Stock Quotes Viewer", "stack": "React + Alpha Vantage API" }, { "project": "Crypto Prices Tracker", "stack": "Vue.js + CoinGecko API" } ] },
            { "day": 68, "choices": [ { "project": "Advanced Weather App with Forecast Chart", "stack": "React + Chart.js" }, { "project": "Flight Search App", "stack": "React + Skyscanner API" } ] },
            { "day": 69, "choices": [ { "project": "AI Chatbot Integration", "stack": "React + OpenAI GPT-3" }, { "project": "Voice Recognition ToDo App", "stack": "React + Web Speech API" } ] },
            { "day": 70, "choices": [ { "project": "Fitness Tracker", "stack": "React Native" }, { "project": "Recipe Nutrition Analyzer", "stack": "React + Edamam API" } ] },
            { "day": 71, "choices": [ { "project": "Language Learning App", "stack": "React" }, { "project": "Vocabulary Builder", "stack": "Vue.js" } ] },
            { "day": 72, "choices": [ { "project": "Task Management Tool", "stack": "React" }, { "project": "Project Management Dashboard", "stack": "Vue.js" } ] },
            { "day": 73, "choices": [ { "project": "Fitness Tracker App", "stack": "React Native" }, { "project": "Meditation Timer", "stack": "React Native" } ] },
            { "day": 74, "choices": [ { "project": "Smart Home Controller", "stack": "React" }, { "project": "Health Monitoring Dashboard", "stack": "Vue.js" } ] },
            { "day": 75, "choices": [ { "project": "Restaurant Reservation System", "stack": "React + Firebase" }, { "project": "Hotel Booking System", "stack": "React + Node.js/Express" } ] },
            { "day": 76, "choices": [ { "project": "Virtual Reality Tour App", "stack": "React VR" }, { "project": "Augmented Reality Furniture Placer", "stack": "React Native + ARKit/ARCore" } ] },
            { "day": 77, "choices": [ { "project": "Podcast Player", "stack": "React" }, { "project": "Music Streaming App", "stack": "React + Spotify API" } ] },
            { "day": 78, "choices": [ { "project": "Recipe Book", "stack": "React" }, { "project": "Food Delivery App", "stack": "Vue.js" } ] },
            { "day": 79, "choices": [ { "project": "Job Portal", "stack": "React" }, { "project": "Freelance Marketplace", "stack": "Vue.js" } ] },
            { "day": 80, "choices": [ { "project": "Social Media App", "stack": "React Native" }, { "project": "Dating App", "stack": "React Native" } ] },
            { "day": 81, "choices": [ { "project": "Expense Tracker with Backend Integration", "stack": "React + Node.js/Express" }, { "project": "Budget Monitoring Dashboard", "stack": "Vue.js + Firebase" } ] },
            { "day": 82, "choices": [ { "project": "Pet Adoption App", "stack": "React" }, { "project": "Pet Service Finder", "stack": "Vue.js" } ] },
            { "day": 83, "choices": [ { "project": "Virtual Classroom", "stack": "React + WebRTC" }, { "project": "Online Exam Portal", "stack": "Vue.js" } ] },
            { "day": 84, "choices": [ { "project": "Fitness Challenge App", "stack": "React Native" }, { "project": "Goal Tracker", "stack": "React Native" } ] },
            { "day": 85, "choices": [ { "project": "Online Marketplace", "stack": "React + Node.js/Express" }, { "project": "Classified Ads Website", "stack": "Vue.js + Firebase" } ] },
            { "day": 86, "choices": [ { "project": "Car Booking App", "stack": "React Native" }, { "project": "Bike Rental App", "stack": "React Native" } ] },
            { "day": 87, "choices": [ { "project": "Advanced E-commerce App", "stack": "React + Node.js/Express" }, { "project": "Auction Website", "stack": "Vue.js + Firebase" } ] },
            { "day": 88, "choices": [ { "project": "Job Application Tracker", "stack": "React" }, { "project": "HR Management System", "stack": "Vue.js" } ] },
            { "day": 89, "choices": [ { "project": "Book Review Platform", "stack": "React" }, { "project": "Article Publishing Website", "stack": "Vue.js" } ] },
            { "day": 90, "choices": [ { "project": "Virtual Personal Assistant", "stack": "React" }, { "project": "Productivity Tracker", "stack": "Vue.js" } ] },
            { "day": 91, "choices": [ { "project": "Online Learning Platform", "stack": "React" }, { "project": "Course Management System", "stack": "Vue.js" } ] },
            { "day": 92, "choices": [ { "project": "Recipe Sharing App", "stack": "React" }, { "project": "Grocery List Organizer", "stack": "Vue.js" } ] },
            { "day": 93, "choices": [ { "project": "Home Automation Dashboard", "stack": "React" }, { "project": "Smart Home Control App", "stack": "Vue.js" } ] },
            { "day": 94, "choices": [ { "project": "Ride Sharing App", "stack": "React Native" }, { "project": "Carpool Finder", "stack": "React Native" } ] },
            { "day": 95, "choices": [ { "project": "Remote Job Board", "stack": "React" }, { "project": "Freelancer Management Tool", "stack": "Vue.js" } ] },
            { "day": 96, "choices": [ { "project": "Language Translation App", "stack": "React" }, { "project": "Real-Time Chat Translator", "stack": "Vue.js" } ] },
            { "day": 97, "choices": [ { "project": "Collaborative Whiteboard", "stack": "React + WebSockets" }, { "project": "Online Collaborative Text Editor", "stack": "Vue.js + WebSockets" } ] },
            { "day": 98, "choices": [ { "project": "Recipe Nutrition Analyzer", "stack": "React" }, { "project": "Meal Planner", "stack": "Vue.js" } ] },
            { "day": 99, "choices": [ { "project": "Personal Finance Manager", "stack": "React" }, { "project": "Investment Tracker", "stack": "Vue.js" } ] },
            { "day": 100, "choices": [ { "project": "Virtual Events Platform", "stack": "React" }, { "project": "Online Conference App", "stack": "Vue.js" } ] },
            { "day": 101, "choices": [ { "project": "Smart Inventory System", "stack": "React" }, { "project": "Warehouse Management", "stack": "Vue.js" } ] },
            { "day": 102, "choices": [ { "project": "Workout Log", "stack": "React" }, { "project": "Fitness Progress Tracker", "stack": "Vue.js" } ] },
            { "day": 103, "choices": [ { "project": "Recipe Sharing App", "stack": "React Native" }, { "project": "Fitness Coaching App", "stack": "React Native" } ] },
            { "day": 104, "choices": [ { "project": "Job Interview Prep App", "stack": "React" }, { "project": "Company Review Platform", "stack": "Vue.js" } ] },
            { "day": 105, "choices": [ { "project": "Virtual Shopping Assistant", "stack": "React" }, { "project": "Personal Shopper App", "stack": "Vue.js" } ] },
            { "day": 106, "choices": [ { "project": "Remote Tutoring App", "stack": "React + WebRTC" }, { "project": "Virtual Coaching Platform", "stack": "Vue.js" } ] },
            { "day": 107, "choices": [ { "project": "Recipe Organizer", "stack": "React" }, { "project": "Cooking Tutorial App", "stack": "Vue.js" } ] },
            { "day": 108, "choices": [ { "project": "Budget Planner", "stack": "React" }, { "project": "Expense Tracker", "stack": "Vue.js" } ] },
            { "day": 109, "choices": [ { "project": "Real-Time Collaboration App", "stack": "React + WebSockets" }, { "project": "Team Messaging App", "stack": "Vue.js + WebSockets" } ] },
            { "day": 110, "choices": [ { "project": "Virtual Study Group", "stack": "React + WebRTC" }, { "project": "Collaborative Learning Platform", "stack": "Vue.js" } ] },
            { "day": 111, "choices": [ { "project": "Event Planner", "stack": "React" }, { "project": "Wedding Planner App", "stack": "Vue.js" } ] },
            { "day": 112, "choices": [ { "project": "Remote Work Management Tool", "stack": "React" }, { "project": "Freelance Project Tracker", "stack": "Vue.js" } ] },
            { "day": 113, "choices": [ { "project": "Eco-Friendly Transportation App", "stack": "React" }, { "project": "Green Travel Guide", "stack": "Vue.js" } ] },
            { "day": 114, "choices": [ { "project": "Real Estate Listing Platform", "stack": "React" }, { "project": "Property Management System", "stack": "Vue.js" } ] },
            { "day": 115, "choices": [ { "project": "Parental Control App", "stack": "React" }, { "project": "Child Safety Tracker", "stack": "Vue.js" } ] },
            { "day": 116, "choices": [ { "project": "Virtual Nurse Assistant", "stack": "React" }, { "project": "Telemedicine Platform", "stack": "Vue.js" } ] },
            { "day": 117, "choices": [ { "project": "Recipe Manager with Grocery List", "stack": "React" }, { "project": "Diet Planner", "stack": "Vue.js" } ] },
            { "day": 118, "choices": [ { "project": "Remote Learning App for Kids", "stack": "React" }, { "project": "Digital Classroom", "stack": "Vue.js" } ] },
            { "day": 119, "choices": [ { "project": "Noise Cancellation App", "stack": "React Native" }, { "project": "Sound Equalizer", "stack": "React Native" } ] },
            { "day": 120, "choices": [ { "project": "Remote Fitness Classes", "stack": "React + WebRTC" }, { "project": "Virtual Gym", "stack": "Vue.js" } ] },
            { "day": 121, "choices": [ { "project": "Language Learning App with Speech Recognition", "stack": "React" }, { "project": "Voice Controlled Assistant", "stack": "Vue.js" } ] },
            { "day": 122, "choices": [ { "project": "Recipe Finder", "stack": "React" }, { "project": "Ingredient-Based Recipe App", "stack": "Vue.js" } ] },
            { "day": 123, "choices": [ { "project": "Real-Time Traffic Monitoring", "stack": "React" }, { "project": "Weather Monitoring Dashboard", "stack": "Vue.js" } ] },
            { "day": 124, "choices": [ { "project": "Virtual Shopping Experience", "stack": "React VR" }, { "project": "Augmented Reality Product Demonstration", "stack": "React Native + ARKit/ARCore" } ] },
            { "day": 125, "choices": [ { "project": "Fitness Tracker with Leaderboard", "stack": "React" }, { "project": "Group Workout App", "stack": "Vue.js" } ] },
            { "day": 126, "choices": [ { "project": "Real-Time Stock Tracker", "stack": "React" }, { "project": "Portfolio Management Dashboard", "stack": "Vue.js" } ] },
            { "day": 127, "choices": [ { "project": "Virtual Art Gallery", "stack": "React" }, { "project": "3D Product Viewer", "stack": "Vue.js" } ] },
            { "day": 128, "choices": [ { "project": "Remote Therapy App", "stack": "React + WebRTC" }, { "project": "Virtual Counseling Platform", "stack": "Vue.js" } ] },
            { "day": 129, "choices": [ { "project": "Physical Rehabilitation App", "stack": "React Native" }, { "project": "Mental Health Tracker", "stack": "React Native" } ] },
            { "day": 130, "choices": [ { "project": "Language Exchange Platform", "stack": "React" }, { "project": "Cultural Exchange App", "stack": "Vue.js" } ] },
            { "day": 131, "choices": [ { "project": "Social Media Analytics Dashboard", "stack": "React" }, { "project": "Influencer Marketing Platform", "stack": "Vue.js" } ] },
            { "day": 132, "choices": [ { "project": "Real-Time Market Analytics", "stack": "React" }, { "project": "Economic Indicators Dashboard", "stack": "Vue.js" } ] },
            { "day": 133, "choices": [ { "project": "Food Delivery Tracking App", "stack": "React Native" }, { "project": "Restaurant Management System", "stack": "Vue.js" } ] },
            { "day": 134, "choices": [ { "project": "Collaborative Workspace Platform", "stack": "React" }, { "project": "Remote Team Management App", "stack": "Vue.js" } ] },
            { "day": 135, "choices": [ { "project": "Online Auction Platform", "stack": "React" }, { "project": "Bidding System", "stack": "Vue.js" } ] },
            { "day": 136, "choices": [ { "project": "Subscription Management System", "stack": "React" }, { "project": "Membership Site", "stack": "Vue.js" } ] },
            { "day": 137, "choices": [ { "project": "Event Ticket Booking App", "stack": "React" }, { "project": "E-Ticketing System", "stack": "Vue.js" } ] },
            { "day": 138, "choices": [ { "project": "Virtual Library", "stack": "React" }, { "project": "E-Book Reader", "stack": "Vue.js" } ] },
            { "day": 139, "choices": [ { "project": "Remote Healthcare Platform", "stack": "React" }, { "project": "Online Medical Consultation App", "stack": "Vue.js" } ] },
            { "day": 140, "choices": [ { "project": "Shopping List App", "stack": "React" }, { "project": "Inventory Tracker", "stack": "Vue.js" } ] },
            { "day": 141, "choices": [ { "project": "Video Streaming App", "stack": "React + Node.js/Express" }, { "project": "Live Streaming Platform", "stack": "Vue.js + Node.js/Express" } ] },
            { "day": 142, "choices": [ { "project": "Recipe with Nutrition Facts", "stack": "React" }, { "project": "Diet Planner and Tracker", "stack": "Vue.js" } ] },
            { "day": 143, "choices": [ { "project": "Virtual Job Fair", "stack": "React" }, { "project": "Online Hiring Platform", "stack": "Vue.js" } ] },
            { "day": 144, "choices": [ { "project": "Remote Team Collaboration Tool", "stack": "React" }, { "project": "Project Management App", "stack": "Vue.js" } ] },
            { "day": 145, "choices": [ { "project": "AI-based Resume Analyzer", "stack": "React" }, { "project": "Job Matching Platform", "stack": "Vue.js" } ] },
            { "day": 146, "choices": [ { "project": "Personal Finance Tracker", "stack": "React" }, { "project": "Expense Monitoring Tool", "stack": "Vue.js" } ] },
            { "day": 147, "choices": [ { "project": "AI-Powered Mentor Matching", "stack": "React" }, { "project": "Online Learning Community", "stack": "Vue.js" } ] },
            { "day": 148, "choices": [ { "project": "Recipe Rating and Review App", "stack": "React" }, { "project": "Cookbook with Sharing Feature", "stack": "Vue.js" } ] },
            { "day": 149, "choices": [ { "project": "Property Management Dashboard", "stack": "React" }, { "project": "Real Estate CRM", "stack": "Vue.js" } ] },
            { "day": 150, "choices": [ { "project": "Virtual Concert Platform", "stack": "React" }, { "project": "Live Event Streaming App", "stack": "Vue.js" } ] },
                { "day": 151, "choices": [ { "project": "E-commerce Platform with Django", "stack": "Django + React" }, { "project": "Online Marketplace with Django", "stack": "Django + Vue.js" } ] },
            { "day": 152, "choices": [ { "project": "Blog Website with Django", "stack": "Django + React" }, { "project": "Content Management System", "stack": "Django + Vue.js" } ] },
            { "day": 153, "choices": [ { "project": "Social Media Platform", "stack": "Django + React" }, { "project": "Community Forum", "stack": "Django + Vue.js" } ] },
            { "day": 154, "choices": [ { "project": "Job Posting Site", "stack": "Django + React" }, { "project": "Job Board with Django", "stack": "Django + Vue.js" } ] },
            { "day": 155, "choices": [ { "project": "Online Learning Platform", "stack": "Django + React" }, { "project": "E-Learning Portal", "stack": "Django + Vue.js" } ] },
            { "day": 156, "choices": [ { "project": "Real Estate App", "stack": "Django + React" }, { "project": "Property Listing Platform", "stack": "Django + Vue.js" } ] },
            { "day": 157, "choices": [ { "project": "Portfolio Website", "stack": "Django + React" }, { "project": "Personal Blog with Django", "stack": "Django + Vue.js" } ] },
            { "day": 158, "choices": [ { "project": "Online Voting System", "stack": "Django + React" }, { "project": "Survey Application", "stack": "Django + Vue.js" } ] },
            { "day": 159, "choices": [ { "project": "Event Management System", "stack": "Django + React" }, { "project": "Event Booking App", "stack": "Django + Vue.js" } ] },
            { "day": 160, "choices": [ { "project": "Online Quiz App", "stack": "Django + React" }, { "project": "Trivia Game Platform", "stack": "Django + Vue.js" } ] },
            { "day": 161, "choices": [ { "project": "Healthcare Management System", "stack": "Django + React" }, { "project": "Medical Appointment App", "stack": "Django + Vue.js" } ] },
            { "day": 162, "choices": [ { "project": "Fitness Tracking App", "stack": "Django + React" }, { "project": "Workout Journal", "stack": "Django + Vue.js" } ] },
            { "day": 163, "choices": [ { "project": "Recipe Blog with Django", "stack": "Django + React" }, { "project": "Cooking Recipe Platform", "stack": "Django + Vue.js" } ] },
            { "day": 164, "choices": [ { "project": "Weather Forecast App", "stack": "Django + React" }, { "project": "Climate Monitoring System", "stack": "Django + Vue.js" } ] },
            { "day": 165, "choices": [ { "project": "News Aggregator", "stack": "Django + React" }, { "project": "RSS Feed Reader", "stack": "Django + Vue.js" } ] },
            { "day": 166, "choices": [ { "project": "Scheduler and Planner App", "stack": "Django + React" }, { "project": "Task Management System", "stack": "Django + Vue.js" } ] },
            { "day": 167, "choices": [ { "project": "Customer Relationship Management (CRM)", "stack": "Django + React" }, { "project": "Sales Tracker", "stack": "Django + Vue.js" } ] },
            { "day": 168, "choices": [ { "project": "Feedback Collection System", "stack": "Django + React" }, { "project": "Review Platform", "stack": "Django + Vue.js" } ] },
            { "day": 169, "choices": [ { "project": "Online Discussion Forum", "stack": "Django + React" }, { "project": "Q&A Site with Django", "stack": "Django + Vue.js" } ] },
            { "day": 170, "choices": [ { "project": "Travel Blog", "stack": "Django + React" }, { "project": "Tour Guide Platform", "stack": "Django + Vue.js" } ] }
          ]';

          $days = json_decode($jsonString);

            foreach ($days as $day) {
                foreach ($day->choices as $choice) {
                    DB::table('projects')->insert([
                        'complete' => false,
                        'stack' => $choice->stack,
                        'title' => $choice->project,
                    ]);
                }
            }
    }
}

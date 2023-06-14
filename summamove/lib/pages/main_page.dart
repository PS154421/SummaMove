import 'package:flutter/material.dart';
import 'package:summamove/pages/oefeningen_page.dart';
import 'about_page.dart';
import 'home_page.dart';

class MainPage extends StatefulWidget {
  const MainPage({Key? key}) : super(key: key);

  @override
  State<MainPage> createState() => _MainPageState();
}

class _MainPageState extends State<MainPage> {
List pages = [
  HomePage(),
  AboutPage(),
  OefeningenPage(),
];
int currentIndex = 0;
void onTap(int index){
  setState(() {
    currentIndex = index;
  });
}
@override
Widget build(BuildContext context) {
  return Scaffold(
    backgroundColor: Colors.white,
    body: pages[currentIndex],
    bottomNavigationBar: BottomNavigationBar(
      type: BottomNavigationBarType.fixed,
      backgroundColor: Colors.white,
      onTap: onTap,
      currentIndex: currentIndex,
      selectedItemColor: Colors.black54,
      unselectedItemColor: Colors.grey.withOpacity(0.5),
      showSelectedLabels: true,
      showUnselectedLabels: false,
      items: [
        BottomNavigationBarItem(
          icon: Icon(Icons.home),
          label: 'Home',
        ),
        BottomNavigationBarItem(
          icon: Icon(Icons.info_outline),
          label: 'About Us',
        ),
        BottomNavigationBarItem(
            icon: Icon(Icons.sports_martial_arts_outlined),
            label: 'Oefeningen'
        ),
      ],
    ),

  );
}
}


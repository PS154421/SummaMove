import 'dart:convert';
import 'package:http/http.dart' as http;
import 'package:summamove/models/Oefening_model.dart';

Future<List<Oefening>> fetchOefening() async {
  print('fetchOefeningen called');
  const url = 'http://10.0.2.2:8000/api/oefeningen';
  final uri = Uri.parse(url);
  final response = await http.get(uri);
  final body = response.body;
  print(response.body);
  final Map<String, dynamic> jsonObject = jsonDecode(body);
  final List<dynamic> json = jsonObject["data"];
  List<Oefening> oefeningen = [];
  //print(json.length);
  for (int i = 0; i < json.length; i++) {
    final oefening = Oefening(
      id: json[i]['id'],
      naam: json[i]['naam'],
      beschrijving: json[i]['beschrijving'],
      // prijs: 3,
    );
    oefeningen.add(oefening);
  }
  return oefeningen;
  print('fetchOefening completed');
}
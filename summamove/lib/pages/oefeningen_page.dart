import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;

class OefeningenPage extends StatefulWidget {
  const OefeningenPage({Key? key}) : super(key: key);

  @override
  State<OefeningenPage> createState() => _OefeningenPageState();
}

class _OefeningenPageState extends State<OefeningenPage> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: Center(
        child: Text("Oefeningen Pagina"),
      ),
    );
  }
}

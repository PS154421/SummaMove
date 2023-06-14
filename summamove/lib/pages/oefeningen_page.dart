import 'package:flutter/material.dart';

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

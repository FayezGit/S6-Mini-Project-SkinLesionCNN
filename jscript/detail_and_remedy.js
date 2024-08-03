function detailRemedy(d) {
  let Dtlink;
  if (
    d ===
    "akiec, Actinic Keratoses (Solar Keratoses) or intraepithelial Carcinoma (Bowen’s disease)"
  ) {
    Dtlink =
      "Remedies: Treatment options include cryotherapy, topical medications (such as fluorouracil, imiquimod, or diclofenac), photodynamic therapy, and surgical removal.";
  } else if (d === "bcc, Basal Cell Carcinoma") {
    Dtlink =
      "Remedies: Treatment options include Mohs surgery, excisional surgery, radiation therapy, topical medications (such as imiquimod or fluorouracil), and photodynamic therapy.";
  } else if (d === "bkl, Benign Keratosis") {
    Dtlink =
      "Remedies: Usually no treatment is necessary, but options include cryotherapy, curettage, or laser therapy for cosmetic reasons.";
  } else if (d === "df, Dermatofibroma") {
    Dtlink =
      "Remedies: Often no treatment is necessary, but options include surgical excision or cryotherapy for symptomatic or cosmetic relief.";
  } else if (d === "mel, Melanoma") {
    Dtlink =
      "Remedies: Treatment options depend on the stage of melanoma but may include surgery, immunotherapy, targeted therapy, chemotherapy, or radiation therapy.";
  } else if (d === "nv, Melanocytic Nevi") {
    Dtlink =
      "Remedies: Usually no treatment is necessary, but monitoring for changes in size, shape, or color is recommended, and removal may be considered for cosmetic reasons or if concerning changes occur.";
  } else if (d === "vasc, Vascular skin lesion") {
    Dtlink =
      "Remedies: Treatment options depend on the type and severity of the lesion but may include laser therapy, surgical excision, or observation.";
  }

  return Dtlink;
}
